$(document).ready(function() {
    // Add the first product row by default
    let firstProductRow = $('#product-template').clone();
    firstProductRow.removeAttr('style');
    $('#inputContainer').append(firstProductRow);

    // Add new product row on click
    $('.add-product').on('click', function() {
        let newProductRow = $('#product-template').clone();
        newProductRow.removeAttr('style');
        $('#inputContainer').append(newProductRow);

        // Optionally, add event listeners to newly added rows
        newProductRow.find('.remove-product').on('click', function() {
            newProductRow.remove();
        });
    });

    // Remove the product row
    $(document).on('click', '.remove-product', function() {
        $(this).closest('.product-row').remove();
    });
});
