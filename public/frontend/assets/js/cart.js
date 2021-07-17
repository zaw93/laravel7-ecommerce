//************ Functionality related to Cart Page ************//
$(document).ready(function() {
    // Display Cart Items in table
    renderCartItems();

    // Quantity Increase from Cart
    $("#shoppingcart-table").on("click", ".btn-increment", function() {
        let key = $(this)
            .closest(".cart-product-quantity")
            .find(".qty-input")
            .data("key");

        increaseQuantity(key);
    });

    // Quantity Decrease from Cart
    $("#shoppingcart-table").on("click", ".btn-decrement", function() {
        let key = $(this)
            .closest(".cart-product-quantity")
            .find(".qty-input")
            .data("key");

        decreaseQuantity(key);
    });

    // Item Remove from Cart
    $("#shoppingcart-table").on("click", ".btn-remove", function() {
        let id = $(this).data("id");

        removeCartItem(id);
    });

    // Sending Cart Items to OrderController
    $(".btn-order").click(function() {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr("content")
            }
        });

        let cartJson = localStorage.getItem("cart");

        $.post("/order", { data: cartJson }, function(res) {
            // console.log(res);

            localStorage.removeItem("cart");
            updateCart();
        });
    });
});
