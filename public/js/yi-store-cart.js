//shopping cart

//1. set the products to localStorage

$('.btn-addtocart').click(function(event){
    let jsonObj;
    let product = {
        productID: $("#product-name").data('id'),
        productName: $("#product-name").text(),
        imageUrl: $(".product-img").data('url'),
        productPrice:$("#product-price").text(),
        productQuantity:$("#quantity").val(),
        productSize:$(".size.active").text(),
    }

    let cart = localStorage.getItem('cart');
    //initial cart
    if (cart == null) {
        jsonObj = {
            products: [product],
        }
        localStorage.setItem('cart', JSON.stringify(jsonObj));
    } else{//if product is already existed
        jsonObj = JSON.parse(cart);
        let isExist = false;
        let len = jsonObj.products.length;
        if(product. productSize) {
            for (let i = 0; i < len; i++) {
                if(jsonObj.products[i]== product.productID && jsonObj.products[i]. productSize == product. productSize) {
                    jsonObj.products[i].productQuantity = parseInt(jsonObj.products[i].productQuantity) + parseInt(product.productQuantity);
                    isExist = true;
                }
            }
        } else {
            alert('Please select a size');
        }


        if(!isExist) {
            jsonObj.products.push(product);
        }
        localStorage.setItem('cart', JSON.stringify(jsonObj));
    }

});
//2.get product from local storage to cart page
$(function(){
    let cart = localStorage.getItem('cart');
    if (cart != null){
      let jsonObj = JSON.parse(cart);
      jsonObj.products.forEach(function(p){
          let template = `<div class="product-cart">
                        <div class="one-forth">
                            <div class="product-img" style="background-image: url(${p.imageUrl});">
                            </div>
                            <div class="display-tc">
                                <h3>${p.productName} (${p.productSize}) </h3>
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
                                <button class="product-delete" data-delete-id="${p.productID}" data-delete-size="${p.productSize}"><i class="fa fa-trash"></i></button>
                            </div>
                        </div>
                    </div>`;
            $('.cart-list').append(template);
      })
    }
});

//3.Remove a product from cart
$(function(){$(".product-delete").click(function(event){
    let cart = localStorage.getItem('cart');
    let jsonObj = JSON.parse(cart);
    if (cart != null) {
        let len = jsonObj.products.length;
        for (let i = 0; i < len; i++) {
            if(jsonObj.products[i].productID == $(this).data('delete-id') && jsonObj.products[i]. productSize == $(this).data('delete-size')) {
                if (confirm("Are you sure to delete it?") == false) {
                    return;
                }
                jsonObj.products.splice(i, 1);
                break;
            }
        }
        localStorage.setItem('cart', JSON.stringify(jsonObj));
        location.reload();
    }
    });
});

//4.Calculate the total price of the shopping cart
$(function(){
    let cart = localStorage.getItem('cart');
    let jsonObj = JSON.parse(cart);
    if (cart != null){
        let len = jsonObj.products.length;
        let price = 0.00;
        for (let i = 0; i < len; i++) {
            price += (parseInt(jsonObj.products[i].productQuantity)) * (parseFloat(jsonObj.products[i].productPrice));
            let template = `<li><span>${parseInt(jsonObj.products[i].productQuantity)} x ${jsonObj.products[i].productName}</span> 
                            <span>$${jsonObj.products[i].productPrice}</span></li>`;
            $('ul.cart-product-name').append(template);
        }
        $('.total-price').text('$' + price);
        $('span.cart-subtotal-price').text('$' + price);
        $('span.cart-total-price').text('$' + price);

    }
});

//5. create a form to submit shopping cart data to the backend
$(function(){
    let cart = localStorage.getItem('cart');
    let jsonObj = JSON.parse(cart);
    if (cart != null){
        let len = jsonObj.products.length;
        $('span.cart-products-number').text('Cart ['+len+']');
        for (let i = 0; i < len; i++){
            let template = `<input type="hidden" name="orderProduct[${i}][product_id]" value="${jsonObj.products[i].productID}">
                        <input type="hidden" name="orderProduct[${i}][product_size]" value="${jsonObj.products[i].productSize}">
                        <input type="hidden" name="orderProduct[${i}][product_quantity]" value="${jsonObj.products[i].productQuantity}">`
            $('#order-form').append(template);
        }
    } else {
        $('span.cart-products-number').text('Cart [0]');
    }

});

//6. clear the localStorage after submit
$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // this is the id of the form
    $("#order-form").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        let form = $(this);
        let url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                localStorage.removeItem('cart');
                window.location.href = '/order-complete'; // show response from the php script.
            }
        });
    });
});

