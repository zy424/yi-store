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
        for (let i = 0; i < len; i++) {
            if(jsonObj.products[i]. productID == product. productID && jsonObj.products[i]. productSize == product. productSize) {
                jsonObj.products[i].productQuantity = parseInt(jsonObj.products[i].productQuantity) + parseInt(product.productQuantity);
                isExist = true;
            }
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
    //Remove a product from cart
    $(".product-delete").click(function(event){
        let cart = localStorage.getItem('cart');
        let jsonObj = JSON.parse(cart);
        let len = jsonObj.products.length;
        for (let i = 0; i < len; i++) {
            if(jsonObj.products[i]. productID == $(this).data('delete-id') && jsonObj.products[i]. productSize == $(this).data('delete-size')) {
                jsonObj.products.splice(i, 1);
            }
        }
        localStorage.setItem('cart', JSON.stringify(jsonObj));
        location.reload();
    });
});
