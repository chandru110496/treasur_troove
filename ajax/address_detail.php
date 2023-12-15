<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

    include("../include/config.php");
ini_set('error_reporting', 0);
    ini_set('display_errors', 0);

session_start();
$userName= $_SESSION['user_name'];
$userEmail= $_SESSION['user_mail'];
$userID= $_SESSION['user_id'];


$user="SELECT * FROM `customer` where `user_id` = '$userID'";
$all_user = mysqli_query($conn, $user); 
if($all_user)
{
     $countUser=mysqli_num_rows($all_user);
}



$sqlAssign = "SELECT * FROM `customer_detail` where `user_id` = '$userID'";											
$resultAssign = mysqli_query($conn, $sqlAssign);											
if (mysqli_num_rows($resultAssign) > 0) {
$i=1;
while($rowAssign = mysqli_fetch_assoc($resultAssign)) {
// $f_name = $rowAssign['name'];
$state = $rowAssign['state'];
$city = $rowAssign['city'];
$zipcode = $rowAssign['zip'];
$flat = $rowAssign['flat'];
$block = $rowAssign['block'];
$society = $rowAssign['society'];

}

    $btn = "Update Shipping Detail";
}else{
    $btn = "Add Shipping Detail";
}


    $data = '<div class="col-xs-12 col-md-12">
    
    <form id="ship" class="ship">
        <div class="row">
            
          
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    <label for="exampleInputName">Flat No/House No</label>
                    <input type="text" class="form-control" name="flat" id="flat" placeholder="Flat No/House No..." value="'.$flat.'"> 
                    <input type="hidden" name="userID" id="userID" value="'.$userID.'"> 
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    <label for="exampleInputName">Tower/Block</label>
                    <input type="text" class="form-control" name="block" id="block" placeholder="Tower/Block..." value="'.$block.'"> 
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    <label for="exampleInputName">Society/Area</label>
                    <input type="text" class="form-control" name="society" id="society" placeholder="Society/Area..." value="'.$society.'"> 
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
                    <label for="exampleInputName">State</label>
                    <input type="text" class="form-control" name="state" id="state" placeholder="State Name..." value="'.$state.'"> 
                </div>
            </div>
            
            <div class="col-xs-12 col-md-4">
                <div class="form-group">
                    <label for="exampleInputName">Zip</label>
                    <input type="number" class="form-control" name="zip_code" id="zip_code" placeholder="Zip Code..." value="'.$zipcode.'"> 
                </div>
            </div>
            
        </div>
        <button type="button" class="shipping_form btn   btn-primary"><i class="fa fa-map"></i> '.$btn.' </button>
    </form>
</div>';

                    
                
                  echo json_encode($data);
?>