<?php
include ('config/database.php');
$id = $_GET["id"];
$cate = "SELECT * FROM `order`  WHERE id ='$id'";
$result_cate = mysqli_query($con,$cate);
if(mysqli_fetch_assoc($result_cate) > 0){
?>
<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="pdf.css" />
    <script src="js/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>

<body>
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
        <div class="col-md-12 text-right mb-3" style="margin-top:30px">
                <button class="btn btn-primary" id="download"> Download pdf</button>
            </div>
            <div class="col-md-12">
                <div class="" id="invoice">
                    <div class="" style="text-align:left">
                       <div class="right-side">
                            <h3 class="justify-content-center text-center">Invoice Form</h3>
                        </div>
                        <span id="error" style="display: none"></span>
                        <?php
                    $cate = "SELECT *
                    FROM `order`
                    JOIN `product_details` ON `order`.`product_id` = `product_details`.`product_id`
                    JOIN `billing_address` ON `order`.`user_id` = `billing_address`.`user_id`
                     WHERE `order_id` = '$id'";
                    $result_cate = $con->query($cate);
    
                    if ($result_cate->num_rows > 0) {
                      // output data of each row
                     
                      while($row = $result_cate->fetch_assoc()) {
                ?>
                <table width="100%" border="1" cellpadding="5" cellspacing="0" class="">
    <tr>
     <td colspan="2" align="center" style="font-size:18px"><b>Invoice</b></td>
    </tr>
    <tr>
     <td colspan="2">
      <table width="100%" cellpadding="5">
       <tr>
        <td width="55%">
         To,<br />
         <b>RECEIVER (BILL TO)</b><br />
         Name : <?= $row['receiver_name']; ?><br /> 
         Billing Address : <?= $row['id']; ?><br />
        
         Invoice No. : <?= $row['invoice_num']; ?><br />
         Invoice Date : <?= $row['invoice_date']; ?><br />
        </td>
       </tr>
      </table>
      <br />
      <table width="100%" border="1" cellpadding="5" cellspacing="0">
       <tr>
       <th>S No.</th>
       <th>Brand</th>
        <th>Item Name</th>
        <th>Action</th>
        <th>Weight</th>
        <th>Touch</th>
        <th>Fine</th>
        <th>Total Amount</th>
       
        <th>Paid</th>
        <th>Balance</th>
       </tr>
       <tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['brand']; ?></td>
    <td><?= $row['product_name']; ?></td>
    <td><?= $row['action']; ?></td>
    <td><?= $row['weight']; ?></td>
    <td><?= $row['touch']; ?></td>
    <td><?= $row['fine']; ?></td>
    <td><?= $row['total_amounts']; ?></td>
    <td><?= $row['paid']; ?></td>
    <td><?= $row['balance']; ?></td>
    
   </tr>
                      </table>
                      <table width="100%" border="1" cellpadding="5" cellspacing="0">
                        <tr style="text-align:center;padding:30px">
                            <th>Total</th>
                            <th>Signature</th>
                        </tr>
                        <tr style="text-align:center;padding:30px">
                        <td><?= $row['total_amounts']; ?></td>
                        <td><?= "BabaBalaknath"; ?></td>
                        </tr>
                      </table>
   
                <?php
                      }
                    }
                ?>
            </div>

                        
                    </div>
                   
            </div>
            
        </div>
    </div>
</body>

</html>
<?php
}
?>
