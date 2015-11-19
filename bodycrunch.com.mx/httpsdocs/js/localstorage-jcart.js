
/* === DEFINE VALUES === */
    cartVat         = 0;
    cartCurrency    = "$";
    productPage     = "index.html";
    imgPath         = "images/productos/";
/* === END DEFINE VALUES === */


/* === HTML 5 STORAGE === */
function addToStorage(elem, name) {
    localData = localStorage.getItem(name + 'Storage');
        
    if (localData == "null" || !localData) {
        var Products = new Array();
    } else {
        var Products = JSON.parse(localData);
    } 

    productID       = elem.parent().next().val();
    productName     = elem.parent().next().attr("p-name");
    productPrice    = elem.parent().next().attr("p-price");
    productImg      = elem.parent().next().attr("p-img");
    productQty      = 1;
    
    $.each( Products, function( index, value ) {
        if (value !== null) {  
            if (value["id"] == productID) {
                if (name == "cart") {
                    productQty = value["qty"] + 1;
                }
                delete Products[index];
            }
        }
    });

    Products.push({
        "id":       productID,
        "name":     productName,
        "price":    productPrice,
        "img":      productImg,
        "qty":      productQty
    });        
    
    localStorage.setItem(name + 'Storage', JSON.stringify(Products));
}

/* === END HTML 5 STORAGE === */


/* === UPDATE DETAILS WISH AND CART DROPDOWN === */
function updateDetails(name) {
    Container   = JSON.parse(localStorage.getItem(name + 'Storage'));
    totalSum    = 0.00;
    nr          = 0;
    wishTbody   = '';
    cartTbody   = '';
     
    if (Container) {
        $.each( Container, function(index, value) {
            if (value !== null) {  
                totalPrice  = value['qty'] * value['price'];
                totalSum    += totalPrice;    
                if ( name == "cart") {
                    nr += value['qty'];
                } else {
                    nr++;
                }    
            }                
        });
    }
    $( "." + name + "Count" ).text(nr);
    
    if (nr < 1) {
        if (name == "wish") {
            wishTbody = '<tr>' +
                '<td>Your wish list is empty !</td>' +
            '</tr>';
            $( "#wishContainer tbody" ).html(wishTbody);
        }
        
        if (name == "cart") { 
            $( ".subtotal" ).text("0.00");
            $( ".vat" ).text("0.00");
            $( ".total" ).text("0.00");        
            
            cartTbody = '<tr class="minicart_empty">' +
                '<td >Carrito Vacio!</td>' +
            '</tr>';
            $( ".cartContainer tbody" ).html(cartTbody);
            $( "#cartContainer tbody" ).html(cartTbody);
        }
    } else {
        if (name == "wish") {
             if (Container) {
                $.each(Container, function(index, value) {
                    if (value !== null) {    
                        wishTbody += '<tr>' +
                            '<td><a href="'+ productPage + '?productid='+ value['id'] +'"><img src="' + imgPath + value['img'] + '" alt="" wisth="30" height="45"></a></td>' +
                            '<td><a href="'+ productPage + '?productid='+ value['id'] +'">' + value['name'] + '</a></td>' +
                            '<td>' + value['price'] + " " + cartCurrency + '</td>' +
                            '<td><a href="#" role="button" class="btn btn-danger btn-xs pull-right remove-product" title="remove" product-id=' + value['id'] + '>x</a></td>' +
                        '</tr>';
                    }                
                });
            }
            $( "#wishContainer tbody" ).html(wishTbody);        
        }
    
        if (name == "cart") { 
            if (Container) {
                $.each(Container, function(index, value) {
                    if (value !== null) {    
                        totalPrice  = value['qty'] * value['price'];
                        cartTbody   += '<tr>' +
                            '<td><img src="' + imgPath + value['img'] + '" alt="" width="40" height="40"></td>' +
                            '<td>' + value['qty'] + '</td>' +
                            '<td class="mini_cart_p_name"> x ' + value['name'] + '</td>' +
                            '<td class="incart_price">'+cartCurrency+' ' + totalPrice.toFixed(2)+'</td>' +
                            '<td class="remove_incart"><a href="#" role="button" class="remove-product" title="remove" product-id=' + value['id'] + '><i class="fa fa-times"></i></a></td>'+
                        '</tr>';
                    } 
                });
            }
        
            total       = totalSum + (totalSum * cartVat);
            totalVat    = totalSum * cartVat;
            $( ".subtotal" ).text(totalSum.toFixed(2) + " " + cartCurrency);
            $( ".vat" ).text(totalVat.toFixed(2) + " " + cartCurrency);
            $( ".total" ).text(total.toFixed(2) + " " + cartCurrency);
            
            $( ".cartContainer tbody" ).html(cartTbody); 
        }
    }
}
/* === UPDATE DETAILS WISH AND CART DROPDOWN === */


/* === WISH LIST === */

updateDetails("wish");

$( ".wish" ).click(function(e) {
    e.preventDefault();

    wish = $(this);
    wish.each(function(){
        addToStorage( wish, "wish" );
    });    
    updateDetails("wish");
    showMessage("wish");
});

$(".wishMenu").click(function(e){
    updateDetails("wish");
    e.stopPropagation();
});

$( ".showWish" ).mouseenter(function() {
    updateDetails("wish");
});    

$( ".emptyWish" ).click(function(){
    localStorage.setItem( 'wishStorage', null );
    $( ".wishCount" ).text(0);
});

$( "#wishContainer tbody" ).delegate(".remove-product", "click", function(e){
    removeID = $(this).attr("product-id");

    Wish = JSON.parse(localStorage.getItem('wishStorage'));
    if (Wish) {
        $.each(Wish, function(index, value) {
            if ( value !== null ) {    
                if ( value['id'] == removeID ) {
                    delete Wish[index];    
                }
            }
        });   
        localStorage.setItem('wishStorage', JSON.stringify(Wish));
    }
    updateDetails("wish");    
});    

/* === END WISH LIST === */


/* === SHOPING CART === */

updateDetails("cart");

$( ".cart" ).click(function(e) {
    e.preventDefault();
	$('#black_overlay').fadeIn();
    cart = $(this);
    cart.each(function() {
		$('#mini_cart').addClass('extra_open');
        addToStorage(cart, "cart");
		
    });    
    updateDetails("cart");
    showMessage("cart");
	
});


$(".cartMenu").click(function(e){
    e.preventDefault();
    updateDetails("cart");
    e.stopPropagation();
});

$( ".showCart" ).mouseenter(function() {
    updateDetails("cart");
});    

$( ".emptyCart" ).click(function() {
	
	$('#mini_cart').removeClass('extra_open');
	$('#black_overlay').fadeOut()
	
    localStorage.setItem('cartStorage', null);
    updateDetails("cart");
});

$( ".cartContainer tbody, #cartContainer tbody" ).delegate(".remove-product", "click", function(e) {
    removeID = $(this).attr("product-id");
	
    Cart = JSON.parse(localStorage.getItem( 'cartStorage' ));
    if (Cart) {
        $.each(Cart, function(index, value) {
            if (value !== null) {    
                if (value['id'] == removeID) {
                    delete Cart[index];    
                }
            }
        });   
        localStorage.setItem('cartStorage', JSON.stringify(Cart));    
    } 
    updateDetails("cart");
    showCheckout();
	
	$('#mini_cart').removeClass('extra_open');
	$('#black_overlay').fadeOut()
});

/* === END SHOPING CART === */


/* === CHECKOUT === */
showCheckout();

function showCheckout() {
    Cart        = JSON.parse(localStorage.getItem('cartStorage'));
    cartTbody   = '';
    totalSum    = 0;

    if (Cart) {
        $.each(Cart, function(index, value) {
            if (value !== null) {    
                totalPrice  = value['qty'] * value['price'];
                cartTbody   += '<tr>' +
                    '<td class="chk_img"><img src="' + imgPath + value['img'] + '" alt="" wisth="80" height="120"></td>' +
                    '<td class="chk_name">' + value['name'] + '</td>' +
					'<td>' + 
                        '<div class="input-group">' +
                            '<input type="number" class="form-control"' + 
                            'value="' + value['qty'] + '"' + ' p-id="' + value['id'] + '" p-name="' + value['name'] + '" p-price="' + value['price'] + '" p-img="' + value['img'] + '">' + 
                            '<span class="input-group-btn">' +
                                '<button class="btn btn-primary updatePrice" type="button">Listo</button>' +
                            '</span>' +
                        '</div>' +
                    '</td>' +
                    '<td class="chk_price text-right">' + value['price'] + " " + cartCurrency + '</td>' +
                    '<td class="chk_subtotal text-right">' + totalPrice.toFixed(2) + " " + cartCurrency + '</td>' +
                    '<td class="chk_remove"><a href="#" role="button" class="btn btn-danger remove-product" title="remove" product-id=' + value['id'] + '><i class="fa fa-times"></i></a></td>' +
					'<input type="hidden" name="vars['+value['id']+']" value="'+value['qty']+'" />'+
                '</tr>';
            } 
        });
    }
    $( "#cartContainer tbody" ).html(cartTbody);
    updateDetails("cart");
}

/* update cart */
$("#cartContainer").delegate(".updatePrice", "click", function() {
    updateCart( $(this).parent().prev() );
});
    
function updateCart(elem) {
    productID       = elem.attr("p-id");
    productName     = elem.attr("p-name");
    productPrice    = elem.attr("p-price");
    productImg      = elem.attr("p-img");
    Qty             = elem.val();

    Products = JSON.parse(localStorage.getItem('cartStorage'));        
    
    if ( Qty > 0 ) {
        $.each( Products, function( index, value ) {
            if (value !== null) {  
                if (value["id"] == productID) {
                    productQty = parseInt(Qty);
                    delete Products[index];
                }
            }
        });
        
        Products.push({
            "id":       productID,
            "name":     productName,
            "price":    productPrice,
            "img":      productImg,
            "qty":      productQty
        });     
    } else {
        $.each(Products, function(index, value) {
            if (value !== null) {
                if (value['id'] == productID) {
                    delete Products[index];
                }
            }
        });
    }

    localStorage.setItem('cartStorage', JSON.stringify(Products));
    updateDetails("cart");
    showCheckout();
}
/* === END CHECKOUT === */