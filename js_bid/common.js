$(document).ready(function(){

    
function loadAllCart(){ 
    $(".fetch_cart").html("");
    $(".side_bar_cart").html("");
    $.ajax({ 
      url : 'ajax/cart.php',
      type : "GET",
      success : function(data){
          console.log(data);
        if(data.status == false){
          $(".fetch_cart").append("<tr><td colspan='3'><h2>"+ data.message +"</h2></td></tr>");
          $(".side_bar_cart").append();
        }else{
          $.each(data, function(key, value){ 
            $(".fetch_cart").append('<tr>'+
                                '<td class="text-center product-thumbnail">'+
                                    '<a class="text-reset" href="#"><img src="upload/product/'+value.image+'" class="img-fluid" width="100" alt=""></a>'+
                                '</td>'+
                                '<td class="text-center product-name"><a class="text-reset" href="#">'+value.product_name+'</a></td>'+
                                '<td class="text-center product-price-cart"><span class="amount">Rs.'+value.product_price+'</span></td>'+
                                '<td class="text-center product-quantity">'+
                                    '<div class="cart-qty d-inline-flex">'+
                                    '<input id="plus'+value.id+'" value="'+value.plus_qty+'" type="hidden">'+
                                    '<input id="minus'+value.id+'" value="'+value.minus_qty+'" type="hidden">'+
                                        '<div class="pro-qty">'+
                                          '<span id="'+value.id+'" value="minus"  class="btn_minus dec qtybtn">-</span>'+
                                              '<input type="text" name="qtybutton" value="'+value.qty+'">'+
                                          '<span id="'+value.id+'" value="plus" class="btn_plus inc qtybtn">+</span>'+
                                          '</div>'+
                                    '</div>'+
                                '</td>'+
                                '<td class="text-center product-subtotal">Rs.'+value.total+'</td>'+
                                '<td class="product-remove text-end text-nowrap">'+
                                    '<a id="'+value.id+'" class="delete-cart btn btn-sm btn-outline-danger text-nowrap px-3"><i class="bi bi-x lh-1"></i> <span class="d-none d-md-inline-block">Remove</span></a>'+
                                '</td>'+
                            '</tr>');
              
              $(".fetch_Order_cart").append('<tr>'+
                                '<td class="text-center product-thumbnail">'+
                                    '<a class="text-reset" href="#"><img src="https://www.purie.in/upload/product/'+value.image+'" class="img-fluid" width="100" alt=""></a>'+
                                '</td>'+
                                '<td class="text-center product-name"><a class="text-reset" href="#">'+value.product_name+'</a></td>'+
                                '<td class="text-center product-price-cart"><span class="amount">Rs.'+value.price+'</span></td>'+
                                '<td class="text-center product-price-cart"><span class="amount">'+value.qty+'</span></td>'+
                                
                                '<td class="text-center product-subtotal">Rs.'+value.total+'</td>'+
                                
                            '</tr>');
                          $(".side_bar_cart").append('<li class="py-3 border-bottom">'+
                            '<div class="row align-items-center">'+
                                '<div class="col-4">'+
                                    '<img class="img-fluid border" src="https://www.purie.in/upload/product/'+value.image+'" alt="...">'+
                                '</div>'+
                                '<div class="col-8">'+
                                    '<p class="mb-2">'+
                                        '<a class="text-dark fw-500" href="#">'+value.product_name+'</a>'+
                                        '<span class="m-0 text-muted w-100 d-block">Rs.'+value.price+'.00 x '+value.qty+'</span>'+
                                        '<span class="m-0 text-muted w-100 d-block">Total : Rs.'+value.total+'.00</span>'+
                                    '</p>'+
                                '</div>'+
                            '</div>'+
                        '</li>');
            
          });
        }
      }
    });
  }
     
 loadAllCart();
    
function loadAllCartCount(){ 
    $(".fetch_cart_count").html("");
    $(".fetch_cart_value").html("");
    $(".fetch_cart_value_sub").html("");
    $(".fetch_cart_value_tax").html("");
    $(".fetch_cart_link").html("");
    $(".fetch_cart_count_side").html("");
    $.ajax({ 
      url : 'ajax/cart-count.php',
      type : "GET",
      success : function(data){
          console.log(data);
        if(data.status == false){
          $(".fetch_cart_count").append('0');
          $(".fetch_cart_value").append('');
          $(".fetch_cart_value_sub").append('');
          $(".fetch_cart_value_tax").append('');
          $(".fetch_cart_link").append('');
          $(".fetch_cart_count_side").append('');
        }else{
          $.each(data, function(key, value){ 
            $(".fetch_cart_count").append(value.total_qty);
            $(".fetch_cart_count_side").append(value.total_qty);
            $(".fetch_cart_value").append('Rs.'+value.total_price+'.00');
            $(".fetch_cart_value_sub").append('Rs.'+value.sub_total+'.00');
            $(".fetch_cart_value_tax").append('Rs.'+value.tax+'.00');
            $(".fetch_cart_link").append('<a class="btn btn-primary" href="'+value.link+'">'+value.text+'</a>');
            
          });
        }
      }
    });
  }
     
 loadAllCartCount();
 
function loadAllCartCountPay(){ 
    $(".fetch_cart_payment").html("");
    $(".login_check").html("");
    
    $.ajax({ 
      url : 'ajax/cart-count-product.php',
      type : "GET",
      success : function(data){
          console.log(data);
        if(data.status == false){
          $(".fetch_cart_payment").append('<span class="" data-cart-items="0"><i class="bi bi-cart"></i></span>');
          $(".login_check").append();
        }else{
          $.each(data, function(key, value){ 
            $(".fetch_cart_payment").append('<a class="'+value.class+' btn btn-primary">'+value.text+'</a>');
            $(".login_check").append(value.login_check);
            
          });
        }
      }
    });
  }
     
 loadAllCartCountPay();
  
  
	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr("id");
// 		var variant_id = $('#variant_id'+product_id).val();
//        alert(variant_id);
		var product_quantity = $('#quantity'+product_id).val();
		var action = "add";
		if(product_quantity > 0)
		{
			$.ajax({
				url:"ajax/action.php",
				method:"POST",
				data:{product_id:product_id, product_quantity:product_quantity, action:action},
                
				success:function(response){
					//alert(response);
                    loadAllCart();
                    loadAllCartCount();
					if (response==true) {
					    swal("", "Product successfully added to cart.", "success");
					}
				}
			});
		}
		else
		{
			alert("lease Enter Number of Quantity");
		}
	});
    
    
    
    $(document).on('click', '.add_new_cart', function(){
		var product_id = $(this).attr("id");
		var variant_id = $('#variant_id').val();
		var product_quantity = $('#quantity').val();
//        alert(variant_id);
		var action = "add";          
        if(variant_id != '')
		{    
		if(product_quantity > 0)
		{
			$.ajax({
				url:"ajax/action.php",
				method:"POST",
				data:{product_id:product_id, product_quantity:product_quantity, variant_id:variant_id, action:action},
                
				success:function(response){
//					alert(response);
                    load_cart_data();
					if (response==true) {
					    swal("", "Product successfully added to cart.", "success");
					}
				}
			});
		}
		else
		{
			alert("lease Enter Number of Quantity");
		}
        }
         else
		{
			alert("Please Select Product Weight");
		}   
	});
    
        
	$(document).on('click', '.btn_plus', function(){
		    var product_id = $(this).attr("id");
        var product_quantity = $('#plus'+product_id).val();
        
//        alert(product_quantity);
        
		var action = "plus";		
			$.ajax({
				url:"ajax/add.php",
				method:"POST",
				data:{product_id:product_id, product_quantity:product_quantity, action:action},
                
				success:function(response){
//					alert(response);
                    loadAllCart();
                    loadAllCartCount();
//                    loadProduct();
					
				}
			});
	});
    
	$(document).on('click', '.btn_minus', function(){
		var product_id = $(this).attr("id");
        var product_quantity = $('#minus'+product_id).val();
        
//        alert(product_quantity);
        
		var action = "minus";		
			$.ajax({
				url:"ajax/minus.php",
				method:"POST",
				data:{product_id:product_id, product_quantity:product_quantity, action:action},
                
				success:function(response){
//					alert(response);
                    loadAllCart();
                    loadAllCartCount();
//                    loadProduct();
					
				}
			});
	});
    
   
	$(document).on('click', '.delete-cart', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		if(confirm("Are you sure you want to remove this product?"))
		{
			$.ajax({
				url:"ajax/cart-remove.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function(response)
				{
					loadAllCart();
                    loadAllCartCount();
					if (response==true) {
					    
					}
					
				}
			})
		}
		else
		{
			return false;
		}
	});
    
    
      

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Your Cart has been clear");
			}
		});
	});
    
   
  
  
    
});

// toast messange

function showToast() {
  // Create a new div element for the toast message
  const toast = document.createElement("div");
  
  // Set the content and style of the toast message
  toast.innerText = "You Ordered Successfully";
  toast.style.backgroundColor = "#d8246e";
  toast.style.color = "#fff";
  toast.style.padding = "10px";
  toast.style.borderRadius = "5px";
  toast.style.position = "fixed";
  toast.style.bottom = "10px";
  toast.style.right = "10px";
  toast.style.opacity = "0";
  toast.style.transition = "opacity 0.3s ease-in";
  
  // Add the toast message to the document
  document.body.appendChild(toast);
  
  // Show the toast message
  setTimeout(function() {
    toast.style.opacity = "1";
  }, 100);
  
  // Hide the toast message after 2 seconds
  setTimeout(function() {
    toast.style.opacity = "0";
    setTimeout(function() {
      document.body.removeChild(toast);
    }, 200);
  }, 2000);
}
function showtoas() {
  // Create a new div element for the toast message
  const toas = document.createElement("div");
  
  // Set the content and style of the toast message
  toas.innerText = " Added To Cart Successfully";
  toas.style.backgroundColor = "#d8246e";
  toas.style.color = "#fff";
  toas.style.padding = "10px";
  toas.style.borderRadius = "5px";
  toas.style.position = "fixed";
  toas.style.bottom = "10px";
  toas.style.right = "10px";
  toas.style.opacity = "0";
  toas.style.transition = "opacity 0.3s ease-in";
  
  // Add the toast message to the document
  document.body.appendChild(toas);
  
  // Show the toast message
  setTimeout(function() {
    toas.style.opacity = "1";
  }, 100);
  
  // Hide the toast message after 2 seconds
  setTimeout(function() {
    toas.style.opacity = "0";
    setTimeout(function() {
      document.body.removeChild(toas);
    }, 200);
  }, 2000);
}