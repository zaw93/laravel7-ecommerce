//************ Functionality related to All Pages ************//
$(document).ready(function() {
    renderCartDropdown();
    countCartItems();

    // Quick add to cart button
    $(".quick-addToCart").click(function() {
        const item = {
            id: $(this).data("id"),
            name: $(this).data("name"),
            photo: $(this).data("photo"),
            price: $(this).data("price"),
            discount: $(this).data("discount"),
            qty: 1
        };

        addToCart(item);
    });

    // Item Remove from Cart Dropdown
    $("#dropdown-cart-menu").on("click", ".btn-remove", function() {
        let id = $(this).data("id");

        removeDropdownCartItem(id);
    });

    // delay function
    function delay(fn, ms) {
        let timer = 0;
        return function(...args) {
            clearTimeout(timer);
            timer = setTimeout(fn.bind(this, ...args), ms || 0);
        };
    }

    // Ajax Search Products
    function searchProducts() {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr("content")
            }
        });

        var input = $(this).val();

        $.ajax({
            url: "/search",
            method: "POST",
            data: {
                input: input
            },
            dataType: "json",
            beforeSend: function() {
                $("#search-dropdown").html(`
                  <div class="text-center">
                    <div class="spinner-border my-5" style="width: 3rem; height: 3rem;" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                  </div>
                `);
            },
            success: function(res) {
                var html = "";

                if (res.data.length > 0) {
                    $.each(res.data, function(i, data) {
                        if (data.discount) {
                            price_html = `
                              <span class="product-search-price"><strike>${data.price.toLocaleString()} Ks</strike></span>
                              <span class="product-search-price new-price ml-2">${data.discount.toLocaleString()} Ks</span>
                            `;
                        } else {
                            price_html = `
                              <span class="product-search-price">${data.price.toLocaleString()} Ks</span>
                            `;
                        }

                        html += `
                          <div class="product">
                            <figure class="search-image-container">
                              <a href="" class="product-image">
                                <img src="storage/${data.photo}"
                                  alt="${data.name}">
                              </a>
                            </figure>

                            <div class="product-search-details">
                              <h4 class="product-search-title">
                                <a href="product.html">${data.name}</a>
                              </h4>
                              ${price_html}
                            </div>
                          </div>
                        `;
                    });

                    $("#search-dropdown")
                        .html(html)
                        .addClass("show");
                } else {
                    html += `
                      <div class='product-search-title text-center my-5'>
                        <i class='icon-exclamation-circle mr-3'></i>No products were found with your search keyword.
                      </div>
                    `;

                    $("#search-dropdown")
                        .html(html)
                        .addClass("show");
                }
            }
        });
    }

    // Search Products Listener
    $("#search_input").on("keyup", delay(searchProducts, 500));

    // Hiding live search products on click outside
    $(document).on("click", function(e) {
        if (!($(e.target).closest("#search-dropdown").length > 0)) {
            $("#search-dropdown").removeClass("show");
        }
    });
});
