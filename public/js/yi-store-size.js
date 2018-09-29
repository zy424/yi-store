//Product size and amount control
$(".size").click(function (event){
    $('.size').removeClass('active');
    $(this).addClass('active');
    $('#quantity').val(1);
});

$('.quantity-right-plus').click(function(event){
    var quantityObj = $('#quantity');
    var quantity = parseInt(quantityObj.val());
    var maxAmount = $(".size.active").data("amount");
    if(quantity<maxAmount) {
        quantityObj.val(parseInt(quantityObj.val())+1);
        $('.quantity-left-minus').removeAttr("disabled", "disabled");
    } else  {
        alert('Sorry, We do not have more!')
    }



});

$('.quantity-left-minus').click(function(event){
    var quantityObj = $('#quantity');
    var quantity = parseInt(quantityObj.val());
    if(quantity > 1){
        quantityObj.val(parseInt(quantityObj.val())-1);
    }
    if(quantity == 1) {
        $(this).attr('disabled','disabled');
    }

});