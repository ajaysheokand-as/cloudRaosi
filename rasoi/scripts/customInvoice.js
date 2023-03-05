// $(document).ready(function() {

// })
const cartItemList = [];



function addItemToCartList(){
    const productCountInCart = cartItemList.length + 1;
    const qty =  $("#invoice_product_qty").val() || 1;
    const price = ($("#invoice_product_price").val() || 1);
    const cartItem = {
        name: $("#invoice_product_name").val() || `Product ${productCountInCart}`,
        qty,
        price,
        subtotal: (qty * price).toFixed(2)
    }
    cartItemList.push(cartItem)
    console.log(cartItem);
    renderCartItem();
    clearCartItemInput()
}


  

function clearCartItemInput(){
    $("#invoice_product_qty").val("")
    $("#invoice_product_price").val("")
    $("#invoice_product_name").val("")
    $("#invoice_product_subtotal").val("")
}

function calculateSubTotal(){
    const qty =  $("#invoice_product_qty").val() || 1;
    const price = ($("#invoice_product_price").val() || 1);
    $("#invoice_product_subtotal").val((qty * price).toFixed(2))
}


function renderCartItem(){

    $("#cartItems").empty();
    cartItemList.map((item,i)=>{
       let cartItem =  `
       <tr>
       <td>${i + 1}</td>
       <td>${item.name}</td>
       <td>${item.qty}</td>
       <td>${item.price}</td>
       <td>${item.subtotal}</td>
       </tr>
     `
     $("#cartItems").append(cartItem);
    })


}