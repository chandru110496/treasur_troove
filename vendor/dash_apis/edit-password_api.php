<?php 
$conn = mysqli_connect("localhost", "root", "", "treasure");
if(isset($_POST['oldpass'])){
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
$sql = "SELECT * FROM `admin` where `password` = '$oldpass'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
if ($row == 1) {
$query="UPDATE `admin` SET `password`='$newpass'";
$result = mysqli_query($conn,$query);

echo'1';
}else{
    echo'0';
}

}

?>
