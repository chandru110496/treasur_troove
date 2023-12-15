<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

    include("../include/database.php");
ini_set('error_reporting', 0);
    ini_set('display_errors', 0);

session_start();
$userName= $_SESSION['user_name'];
$userEmail= $_SESSION['user_mail'];
$userID= $_SESSION['user_id'];

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
$f_name = $rowAssign['f_name'];
$l_name = $rowAssign['l_name'];
$email = $rowAssign['email'];
$phone = $rowAssign['phone'];
$state = $rowAssign['state'];
$city = $rowAssign['city'];
$zipcode = $rowAssign['zip'];
$address = $rowAssign['address'];

}

    $btn = "Update Detail";
}else{
    $btn = "Add Detail";
}


    $data = '<div class="col-xs-12 col-md-12">
    <br>
    <form id="address" class="address">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    <label for="exampleInputName">First Name</label>
                    <input type="text" class="form-control" name="f_name" id="f_name" placeholder="Enter First Name..." value="'.$f_name.'"> 
                    <input type="hidden" name="userID" id="userID" value="'.$userID.'"> 
                </div>
            </div>
            
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    <label for="exampleInputName">Last Name</label>
                    <input type="text" class="form-control" name="l_name" id="l_name" placeholder="Enter First Name..." value="'.$l_name.'"> 
                </div>
            </div>
            
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    <label for="exampleInputName">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Id..." value="'.$email.'"> 
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    <label for="exampleInputName">Phone Number</label>
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number..." value="'.$phone.'"> 
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form-group">
                    <label for="exampleInputName">State</label>
                    <input type="text" class="form-control" name="state" id="state" placeholder="State Name..." value="'.$state.'"> 
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form-group">
                    <label for="exampleInputName">City</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="City Name..." value="'.$city.'"> 
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="form-group">
                    <label for="exampleInputName">Pin Code</label>
                    <input type="number" class="form-control" name="zip_code" id="zip_code" placeholder="Zip Code..." value="'.$zipcode.'"> 
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="form-group">
                    <label for="exampleInputName">Full Address</label>
                    <input type="text" class="form-control" name="address" id="myaddress" placeholder="Address..." value="'.$address.'"> 
                </div>
            </div>
        </div>
        <button type="button" class="shipping_address btn" style="background: #009688; border: 1px solid #009688;"  btn-primary"><i class="fa fa-map"></i> '.$btn.' </button>
    </form>
</div>';

                    
                
                  echo json_encode($data);
?>