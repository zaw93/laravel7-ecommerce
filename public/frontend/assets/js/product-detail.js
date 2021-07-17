//************ Functionality related to Product Detail Page ************//
$(document).ready(function() {
    // Initialize Qty Input Buttons
    quantityInputs();

    let qty = 1;

    // Changing qty input
    $(".qty-input").on("change", function(event) {
        qty = +$(this).val();
    });

    // Product Detail add to cart button
    $(".product-addToCart").click(function() {
        const item = {
            id: $(this).data("id"),
            name: $(this).data("name"),
            photo: $(this).data("photo"),
            price: $(this).data("price"),
            discount: $(this).data("discount"),
            qty: qty
        };

        // console.log(item);
        addToCart(item);
    });
});
