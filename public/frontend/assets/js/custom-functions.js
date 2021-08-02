// Initialize function for qty inputs plugin
// function quantityInputs() {
//     if ($.fn.inputSpinner) {
//         $("input[type='number']").inputSpinner({
//             decrementButton: '<i class="icon-minus"></i>',
//             incrementButton: '<i class="icon-plus"></i>',
//             groupClass: "input-spinner",
//             buttonsClass: "btn-spinner",
//             buttonsWidth: "26px"
//         });
//     }
// }

// Add To Cart function
function addToCart(item) {
    let cart_str = localStorage.getItem("cart");
    let cart_arr = cart_str ? JSON.parse(cart_str) : [];

    let status = false;
    $.each(cart_arr, (i, v) => {
        if (item.id === v.id) {
            v.qty += item.qty;
            status = true;
        }
    });

    if (status === false) cart_arr.push(item);

    localStorage.setItem("cart", JSON.stringify(cart_arr));

    renderCartDropdown();
    countCartItems();
}

// Counting cart items quantity
function countCartItems() {
    let cart_arr = JSON.parse(localStorage.getItem("cart"));
    let count = 0;

    if (cart_arr && cart_arr.length > 0) {
        $.each(cart_arr, (i, item) => {
            count += item.qty;
        });

        if (count > 0) {
            // $(".cart-count").show();
            $(".cart-count").text(count);
        }
    } else {
        $(".cart-count").text(count);
    }
}

// Render Cart Dropdown
function renderCartDropdown() {
    let cart_arr = JSON.parse(localStorage.getItem("cart"));
    let html = "";

    if (cart_arr && cart_arr.length > 0) {
        let subtotal = 0;

        $.each(cart_arr, function(i, item) {
            let total;

            if (item.discount) {
                total = item.discount * item.qty;
            } else {
                total = item.price * item.qty;
            }

            html += `
              <div class="product">
                <div class="product-cart-details">
                  <h4 class="product-title">
                    <a href="product.html">${item.name}</a>
                  </h4>

                  <span class="cart-product-info">
                    <span class="cart-product-qty">${item.qty}</span>
                    x ${
                        item.discount
                            ? item.discount.toLocaleString()
                            : item.price.toLocaleString()
                    } Ks
                  </span>
                </div>

                <figure class="product-image-container">
                  <a href="" class="product-image">
                    <img src="${item.photo}" alt="${item.name}">
                  </a>
                </figure>
                <button class="btn-remove" data-id="${
                    item.id
                }"><i class="icon-close"></i></button>
              </div>
            `;

            subtotal += total;
        });

        $(".dropdown-cart-products").html(html);
        $(".dropdown-cart-total").html(`
          <span>Total</span>
          <span class="cart-total-price dropdown-cart-total-price">${subtotal.toLocaleString()} Ks</span>
          `);
    } else {
        html += `
          <div class="text-center">
            <h4 class="mb-3">YOUR CART IS EMPTY.</h4>
            <p>Before proceed to checkout you must add some products to your shopping cart.</p>
          </div>
        `;

        $(".dropdown-cart-products").html(html);
        $(".dropdown-cart-total").empty();
    }
}

// Render cart items to cart table
function renderCartItems() {
    let cart_arr = JSON.parse(localStorage.getItem("cart"));
    let html = "";

    if (cart_arr && cart_arr.length > 0) {
        let subtotal = 0;

        $.each(cart_arr, function(i, item) {
            let total;

            if (item.discount) {
                total = item.discount * item.qty;
            } else {
                total = item.price * item.qty;
            }

            html += `
            <tr>
              <td class="product-col" width="45%">
                <div class="product">
                  <figure class="product-cart-media">
                    <a href="">
                      <img src="${item.photo}"
                        alt="${item.name}">
                    </a>
                  </figure>
    
                  <h3 class="product-cart-title">
                    <a href="">${item.name}</a>
                  </h3>
                </div>
              </td>
              <td class="price-col">${
                  item.discount
                      ? item.discount.toLocaleString()
                      : item.price.toLocaleString()
              } Ks</td>
              <td class="quantity-col">
                <div id="product-cart-quantity" class="cart-product-quantity">
                  <input type="number" class="form-control qty-input" data-key="${
                      item.id
                  }" value="${
                item.qty
            }" min="1" max="10" step="1" data-decimals="0"
                    required>
                </div>
              </td>
              <td class="total-col">${total.toLocaleString()} Ks</td>
              <td class="remove-col"><button class="btn-remove" data-id="${
                  item.id
              }"><i class="icon-close"></i></button></td>
            </tr>
          `;

            subtotal += total;
        });

        $("#cart-tbody").html(html);
        $(".subtotal").html(`${subtotal.toLocaleString()} Ks`);
        $(".total").html(`${subtotal.toLocaleString()} Ks`);

        // Initialize Qty Input Btns
        if ($.fn.inputSpinner) {
            $("#product-cart-quantity .qty-input").inputSpinner({
                decrementButton: '<i class="icon-minus"></i>',
                incrementButton: '<i class="icon-plus"></i>',
                groupClass: "input-spinner",
                buttonsClass: "btn-spinner",
                buttonsWidth: "26px"
            });
        }
    } else {
        html += `
        <div class="container">
          <div class="text-center">
            <h3 class="mb-3">YOUR CART IS EMPTY.</h3>
            <p>Before proceed to checkout you must add some products to your shopping cart.</p>
            <p class="mb-3">You will find a lot of interesting products on our "Shop" page.</p>
            <a href="/" class="btn btn-outline-dark-2 btn-inline mb-3">RETURN TO SHOP</a>
          </div>
        </div>
      `;

        $(".cart").html(html);
        // $("#shoppingcart-table").html(html);
        // $(".subtotal").html("0 Ks");
    }
}

// Increase item quantity from cart
function increaseQuantity(key) {
    let cart_arr = JSON.parse(localStorage.getItem("cart"));

    if (cart_arr && cart_arr.length > 0) {
        $.each(cart_arr, function(i, item) {
            if (key === item.id && item.qty < 10) {
                item.qty++;
            }
            localStorage.setItem("cart", JSON.stringify(cart_arr));

            updateCart();
        });
    }
}

// Decrease Item quantity from cart
function decreaseQuantity(key) {
    let cart_arr = JSON.parse(localStorage.getItem("cart"));

    if (cart_arr && cart_arr.length > 0) {
        $.each(cart_arr, function(i, item) {
            if (key === item.id) {
                item.qty--;

                if (item.qty === 0) {
                    cart_arr = cart_arr.filter(
                        cart_item => cart_item.id != item.id
                    );
                }
            }
            localStorage.setItem("cart", JSON.stringify(cart_arr));

            updateCart();
        });
    }
}

// Remove Item from cart
function removeCartItem(id) {
    let cart_arr = JSON.parse(localStorage.getItem("cart"));

    $.each(cart_arr, function(i, item) {
        if (id === item.id) {
            cart_arr = cart_arr.filter(cart_item => cart_item.id != item.id);
        }

        localStorage.setItem("cart", JSON.stringify(cart_arr));

        updateCart();
    });
}

// Update Cart function
function updateCart() {
    renderCartItems();
    renderCartDropdown();
    countCartItems();
}
