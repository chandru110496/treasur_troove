<?php

ini_set('error_reporting', 0);
ini_set('display_errors', 0);

session_start();


$userName= $_SESSION['user_name'];
$userEmail= $_SESSION['user_mail'];
$userID= $_SESSION['user_id'];

include("../include/database.php");

$user="SELECT * FROM `register` where `user_id` = '$userID'";
$all_user = mysqli_query($db, $user); 
if($all_user)
{
     $countUser=mysqli_num_rows($all_user);
}

$sqlAssign = "SELECT * FROM `register` where `user_id` = '$userID'";											
$resultAssign = mysqli_query($db, $sqlAssign);											
if (mysqli_num_rows($resultAssign) > 0) {
$i=1;
while($rowAssign = mysqli_fetch_assoc($resultAssign)) {
$state = $rowAssign['state'];
$city = $rowAssign['city'];
$zipcode = $rowAssign['zip'];
$flat = $rowAssign['flat'];
$block = $rowAssign['block'];
$society = $rowAssign['society'];

}}

if($userName == ''){
    $head_user_name = '<a class="text-white text-capitalize" href="login"><i class="fas fa-user"></i> Login / Register</a>';
    $side_user_name = 'Hello, Sign in';
    $side_user_account = '<ul>
                    <li><a href="login">Login</a></li>
                    <li><a href="login">Register</a> </li>
                </ul>';
}
else{
    $head_user_name = '<a class="text-white text-capitalize" href="login"><i class="fas fa-user"></i> Hello, '.$userName.'</a>
    <a class="text-white text-capitalize" href="login"><i class="fas fa-bag"></i> My Account</a>';
    $side_user_name = 'Hello, '.$userName;
    $side_user_account = '<ul>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">My Order</a> </li>
                </ul>';
    
}
    
    if(isset($_SESSION['cart'])){ 
        $sum =0; 
        $sql="SELECT * FROM product_details WHERE id IN ("; 

        foreach($_SESSION['cart'] as $id => $value) { 
        $sql.=$id.","; 
        } 
        $sql=substr($sql, 0, -1).") ORDER BY product_name ASC"; 
        $query=mysqli_query($db, $sql); 
        while($row=mysqli_fetch_array($query)){
        $qty = $_SESSION['cart'][$row['id']]['qty'];
        $price = $row['product_new_price'];
        $price_1 = $row['product_old_price'];
        $id = $row['product_id'];
        $image=$row['product_image1'];
        $product_name = $row['product_name'];
        $proquantity = $row['qty'];
        $pro_code = $row['pro_code'];
        $total = $qty * $price;
        $sum = $total+$sum;
        $quantity[] =  $qty;
            $q1 = $qty+1;
            $q2 = $qty-1;
        
           $total_qty = array_sum ($quantity);

            $output .= '<div class="cart-items bg-white position-relative border-bottom">
                <div class="d-flex  align-items-center p-3">
                    <a href="product-detail?id='.$id.'"><img src="../upload/product/'.$image.'" class="img-fluid"></a>
                    <a class="ml-3 text-dark text-decoration-none w-100">
                        <h5 class="mb-1" style="font-size: 13px !important;">'.$product_name.'</h5>
                        <p class="text-muted mb-2">Rs.'.$price.'.00/'.$proquantity.'</p>
                        <div class="d-flex align-items-center">
                            <p class="font-weight-bold m-0">Rs.'.$total.'.00</p>
                            <div class="input-group input-spinner ml-auto cart-items-number">
                            <input id="plus'.$id.'" value="'.$q1.'" type="hidden">
                            <input id="minus'.$id.'" value="'.$q2.'" type="hidden">
                            
                                <div class="input-group-prepend">
                                    <button id="'.$id.'" value="minus" class="btn_minus btn btn-success btn-sm" type="button"> - </button>
                                </div>
                                <input type="text" class="form-control" value="'.$qty.'">
                                <div class="input-group-append">
                                    <button type="button" id="'.$id.'" value="plus" class="btn_plus btn btn-success btn-sm"> + </button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>';
    }}
if($sum == ''){
    $t1 = 'Start Shopping';    
    $ur = $base_url;
    $place_new_order .= '';
}
else{
    if($countUser == '0'){
        $p_t_c = 'Add Shipping Address';
        $p_t_c_url = 'shipping-address.php';
    }
    else{
        $p_t_c = 'Proceed To Checkout';
        $p_t_c_url = 'checkout.php';
    }
    $t1 = 'Proceed to checkout';    
    $ur = 'checkout'; 
    $place_new_order .='<a href="cart.php" class="text-decoration-none">
                    <div style="padding-top: 6px !important;padding-bottom: 6px !important;border-radius: 20px !important;background: linear-gradient(90deg, #1d8865, #902d5f);" class="rounded shadow d-flex align-items-center p-3 text-white">
                    <i style="font-size: 30px;" class="icofont-basket"></i>&nbsp&nbsp
                        <div class="more">
                            <h6 class="m-0">Subtotal Rs.'.$sum.'.00</h6>
                            <p class="small m-0">View Cart</p>
                        </div>
                        <div class="ml-auto"><i class="icofont-simple-right"></i></div>
                    </div>
                </a>';
    $proceed_payment .='<a href="'.$p_t_c_url.'" class="text-decoration-none">
                    <div style="padding-top: 6px !important;padding-bottom: 6px !important;border-radius: 20px !important;background: linear-gradient(90deg, #1d8865, #902d5f);" class="rounded shadow bg-success d-flex align-items-center p-3 text-white">
                        <i style="font-size: 30px;" class="icofont-basket"></i>&nbsp&nbsp
                        <div class="more">
                            <h6 class="m-0">Subtotal Rs.'.$sum.'.00</h6>
                            <p class="small m-0">'.$p_t_c.'</p>
                        </div>
                        <div class="ml-auto"><i class="icofont-simple-right"></i></div>
                    </div>
                </a>';
    $shipping_add = '<div class="d-flex align-items-center">
            <p class="mb-2 font-weight-bold">'.$userName.'</p>
            <p class="mb-2 badge-success ml-auto">Default</p>
        </div>

        <p class="small text-muted m-0">'.$flat.', '.$block.', '.$society.'</p>
        <p class="small text-muted m-0">'.$state.', '.$city.', '.$zipcode.'</p>';
    
}
if($sum <= '499'){
    $ship = 0;
    $ship_msg = 'Rs.00.00';
    $total_cart_value = $sum + $ship;
    $m1 = 500-$sum;
    $msg = 'Add Rs. <b>'.$m1. '</b> For Free Shipping!';
}
else{
    $ship = 0;
    $ship_msg = 'Free Shipping!';
    $total_cart_value = $sum;
    $msg = '';
}

if($userName != '' && $userEmail != ''){
    
    if($countUser == ''){
        $t2 = 'Add Shipping Detail!';
        $ur2 = '';
        $btn_pay = '<a class="btn btn-primary btn-lg btn-block " title="checkout" href="'.$ur2.'" style="margin-bottom:20px; font-size: 17px; margin-top:20px;"> '.$t2.' &nbsp; <i class="fa fa-arrow-right"></i> </a>';
    }
    elseif($sum == ''){
        $t2 = 'Start Shopping';
        $ur2 = $base_url;
        $btn_pay = '<a class="btn btn-primary btn-lg btn-block " title="checkout" href="'.$ur2.'" style="margin-bottom:20px; font-size: 17px; margin-top:20px;"> '.$t2.' &nbsp; <i class="fa fa-arrow-right"></i> </a>';
    }
    else{
        $t2 = 'Proceed to Payment';
        $ur2 = 'payment';
        $btn_pay = '<button type="button" class="payment btn btn-primary btn-lg btn-block " title="Proceed to Payment" style="margin-bottom:20px; font-size: 17px; margin-top:20px;"> '.$t2.' &nbsp; <i class="fa fa-arrow-right"></i> </button>';
    }
}
else{
    if($sum == ''){
        $t2 = 'Start Shopping';
        $ur2 = $base_url;
        $btn_pay = '<a class="btn btn-primary btn-lg btn-block " title="checkout" href="'.$ur2.'" style="margin-bottom:20px; font-size: 17px; margin-top:20px;"> '.$t2.' &nbsp; <i class="fa fa-arrow-right"></i> </a>';
    }
    else{
        $t2 = 'Please Login To Account';
        $ur2 = '';
        $btn_pay = '<a class="btn btn-primary btn-lg btn-block " title="checkout" href="'.$ur2.'" style="margin-bottom:20px; font-size: 17px; margin-top:20px;"> '.$t2.' &nbsp; <i class="fa fa-arrow-right"></i> </a>';
    }
}

$cart = '<div class="clearfix">
            <p class="mb-1 text-muted">Product Quantity <span class="float-right text-dark">'.$total_qty.'</span></p>
            <p class="mb-1 text-muted">Item Total <span class="float-right text-dark">Rs.'.$sum.'.00</span></p>
            <p class="mb-1 text-muted">Delivery Fee<span class="text-info ml-1"><i class="icofont-info-circle"></i></span><span class="float-right text-dark">'.$ship_msg.'</span></p>
            <p class="mb-1 text-muted">Total (Tax Excl.) <span class="float-right text-dark">Rs.'.$sum.'.00</span></p>
            <p class="mb-1 text-success">Total Tax<span class="float-right text-success">Rs.0.00</span></p>
            <hr>
            <h6 class="font-weight-bold mb-0">TO PAY <span class="float-right">Rs.'.$total_cart_value.'.00</span></h6>
        </div>';

$carts = '<div class="table-block" id="order-detail-content">
                                    <div class="w100 cartMiniTable">
                                        <table id="cart-summary" class="std table">
                                            <tbody>
                                                <tr>
                                                    <td>Total products</td>
                                                    <td class="price"><span class="">Rs.'.$sum.'.00</span></td>
                                                </tr>
                                                <tr style="">
                                                    <td>Shipping</td>
                                                    <td class="price"><span class="success">'.$ship_msg.'</span></td>
                                                </tr>
                                                <tr class="cart-total-price ">
                                                    <td>Total (tax excl.)</td>
                                                    <td class="price">Rs.0.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Total tax</td>
                                                    <td class="price" id="total-tax">Rs.0.00</td>
                                                </tr>
                                                <tr>
                                                    <td> Total</td>
                                                    <td class="price"><span class="success">Rs.'.$total_cart_value.'.00</span></td>
                                                </tr>
                                                <p>'.$msg.'</p>
                                                
                                            </tbody>
                                            <tbody> </tbody>
                                        </table>
                                    </div>
                                </div>';
$checkout_price = '<li class="list-group-item d-flex justify-content-between align-items-center">
                            <ul class="items">
                                <li>item</li>
                            </ul>
                            <ul class="amount">
                                <li>'.$total_qty.'</li>
                            </ul>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <ul class="items">
                                <li>Total Product</li>
                            </ul>
                            <ul class="amount">
                                <li>Rs.'.$sum.'.00</li>
                            </ul>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <ul class="items">
                                <li>Shipping</li>
                            </ul>
                            <ul class="amount">
                                <li>'.$ship_msg.'</li>
                            </ul>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <ul class="items">
                                <li>Total (tax excl.)</li>
                                <li>Taxes</li>
                            </ul>
                            <ul class="amount">
                                <li>Rs.'.$total_cart_value.'.00</li>
                                <li>Rs.0.00</li>
                            </ul>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <ul class="items">
                                <li>Total</li>
                            </ul>
                            <ul class="amount">
                                <li>Rs.'.$total_cart_value.'.00</li>
                            </ul>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <p>'.$msg.'</p>
                        </li>
                        
                        <li class="list-group-item text-center"> '.$btn_pay.'</li>';


if($sum != ''){
    $total_cart_value = 'Cart : Rs.'.$sum.'.00';
}
else{
    $total_cart_value = 'Cart : Rs.0.00';
}




$data = array(
	'cart_details'		=>	$output,
	'total_price'		=>	$cart,
	'proc_payment'		=>	$carts,
	'checkout_price'	=>	$checkout_price,
	'head_user_name'	=>	$head_user_name,
	'side_user_name'	=>	$side_user_name,
	'side_user_account'	=>	$side_user_account,
	'total_cart_value'	=>	$total_cart_value,
	'place_new_order'	=>	$place_new_order,
	'proceed_payment'	=>	$proceed_payment,
	'total_item'		=>	$total_qty,
	'shipping_add'		=>	$shipping_add
);	

echo json_encode($data);


?>