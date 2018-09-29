

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

$(".btn-addtocart").click(function(event){
    var product = {
        productID: $("#product-name").data('id'),
        productName: $("#product-name").text(),
        imageUrl: $(".product-img").data('url'),
        productPrice:$("#product-price").text(),
        productQuantity:$("#quantity").val(),

    };
    var cart = localStorage.getItem("cart");
    if(cart == null) {
        var jsonObj = {
           products:[product]
        };
        localStorage.setItem("cart",JSON.stringify(jsonObj));
    } else {

        var jsonObj = JSON.parse(cart);

        var isExist = false;

        for (var i = 0; i < jsonObj.products.length; i++) {
            if(jsonObj.products[i].productID == product.productID){
                jsonObj.products[i].productQuantity = parseInt(jsonObj.products[i].productQuantity) + parseInt(product.productQuantity);
                isExist = true;
            }

        }
        if (!isExist) {
            jsonObj.products.push(product);
        }
        localStorage.setItem("cart",JSON.stringify(jsonObj));
    }
});

$(function(){
    var cart = localStorage.getItem("cart");
    if(cart != null) {
        var jsonObj = JSON.parse(cart);

        // for (var i = 0; i < jsonObj.products.length; i++) {
        //     var p = jsonObj.products[i];
        //     var template = `<div class="product-cart">
        //                 <div class="one-forth">
        //                     <div class="product-img" style="background-image: url(${p.imageUrl});">
        //                     </div>
        //                     <div class="display-tc">
        //                         <h3>${p.productName}</h3>
        //                     </div>
        //                 </div>
        //                 <div class="one-eight text-center">
        //                     <div class="display-tc">
        //                         <span class="price">$${p.productPrice}</span>
        //                     </div>
        //                 </div>
        //                 <div class="one-eight text-center">
        //                     <div class="display-tc">
        //                         <input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="${p.productQuantity}" min="1" max="100">
        //                     </div>
        //                 </div>
        //                 <div class="one-eight text-center">
        //                     <div class="display-tc">
        //                         <span class="price">$${p.productPrice * p.productQuantity}</span>
        //                     </div>
        //                 </div>
        //                 <div class="one-eight text-center">
        //                     <div class="display-tc">
        //                         <a href="#" class="closed"></a>
        //                     </div>
        //                 </div>
        //             </div>`;
        //     $('.cart-list').append(template);
        //
        // }

        jsonObj.products.forEach(function(p){
            var template = `<div class="product-cart">
                        <div class="one-forth">
                            <div class="product-img" style="background-image: url(${p.imageUrl});">
                            </div>
                            <div class="display-tc">
                                <h3>${p.productName}</h3>
                            </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <span class="price">$${p.productPrice}</span>
                            </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="${p.productQuantity}" min="1" max="100">
                            </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <span class="price">$${p.productPrice * p.productQuantity}</span>
                            </div>
                        </div>
                        <div class="one-eight text-center">
                            <div class="display-tc">
                                <a href="#" class="closed"></a>
                            </div>
                        </div>
                    </div>`;
            $('.cart-list').append(template);
        });
    }
});




