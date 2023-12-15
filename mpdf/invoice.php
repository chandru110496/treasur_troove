<?php
ob_clean();
ob_start();

$mysqli = new mysqli("localhost","u541379268_s3_mech","S3mechanicDB","u541379268_s3_mech");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$ser_id = $_GET['ser_id'];

 $sqls = "SELECT service_car.*, customer_car.*, brand.*, modal.*, verient.*, service_request.*, workshop_user.workshop_name FROM `service_request` 
                                        LEFT JOIN service_car ON service_car.service_req_id = service_request.service_request_id
                                        JOIN workshop_user ON workshop_user.workshop_id = service_request.workshop_id
                                        JOIN customer_car ON customer_car.car_id = service_request.car_id
                                        JOIN brand ON brand.brand_id = customer_car.brand_id
                                        JOIN modal ON modal.modal_id = customer_car.modal_id
                                        JOIN verient ON verient.verient_id = customer_car.veriant
                                        WHERE service_request.service_request_id = $ser_id";
$query_contacts = mysqli_query($mysqli, $sqls);											
if (mysqli_num_rows($query_contacts) > 0) {
$i=1;
while($row_cons = mysqli_fetch_array($query_contacts)) {
    $total_paid=$row_cons['total_paid'];
    $pick_per_name=$row_cons['pick_per_name'];
    $pick_mobile_number=$row_cons['pick_mobile_number'];
    $pick_address=$row_cons['pick_address'];
    $status=$row_cons['status'];
    $invoice_remark=$row_cons['invoice_remark'];
    $next_due_date_old=$row_cons['next_due_date'];
    $extra_discount=$row_cons['extra_discount'];
    $gst_no=$row_cons['gst_no'];
    
    $next_due_date = date("d-m-Y", strtotime($next_due_date_old));
    
    $car_brand = $row_cons['car_brand'];
    $odometer_reading = $row_cons['odometer_reading'];
    $car_modal = $row_cons['car_modal'];
    $car_no = $row_cons['car_no'];
    $workshop_name = $row_cons['workshop_name'];
    $last_update = $row_cons['last_update'];
    $verient_name = $row_cons['verient_name'];
    
    $new_date = $newDate = date("d-m-Y", strtotime($last_update)); 
    
    if($gst_no != ''){
         $gsts = '<span>GST No : '.$gst_no.'</span><br>';
    } else{
        $gsts = '';
    }
}}


$sqls1 = "SELECT * FROM my_cart JOIN service ON service.service_id=my_cart.service_id where my_cart.service_request_id=$ser_id";
                                        			
                                        			
$query_contacts1 = mysqli_query($mysqli, $sqls1);											
if (mysqli_num_rows($query_contacts1) > 0) {
$i=1;
$service_de = '';
while($row_cons1 = mysqli_fetch_array($query_contacts1)) {
    $service_name=$row_cons1['service_name'];
   $cart_price=$row_cons1['cart_price'];
   
//   $cart_pr = 
  
   $qty=$row_cons1['qty'];
    $cart_price1[]=$cart_price*$qty;
    
    $total = $cart_price;
    $gst = $total*9/100;
    
    $ct_pr = $cart_price - $gst;
    $service_de .= '<tr>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$service_name.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.$ct_pr*$qty.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$qty.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.$gst*$qty.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.$gst*$qty.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.$total*$qty.'</td>
        		</tr>';
    
}} else{
    $service_de = '';
}


$sqls2 = "SELECT * FROM extra_service LEFT JOIN `parts` on parts.part_id = extra_service.part_id where service_req_id=$ser_id and `customer_approve` = '1'";
$query_contacts2 = mysqli_query($mysqli, $sqls2);											
if (mysqli_num_rows($query_contacts2) > 0) {
$i=1;
$ap_service = '';
while($row_cons2 = mysqli_fetch_array($query_contacts2)) {
    $ex_service_name=$row_cons2['ex_service_name'];
    $ex_price=$row_cons2['ex_price'];
    $ex_price2[]=$row_cons2['ex_price'];
    $part_mrp=$row_cons2['part_mrp'];
    $part_sgst=$row_cons2['part_sgst'];
    $part_cgst=$row_cons2['part_cgst'];
    $labour_mrp=$row_cons2['labour_mrp'];
    $labour_sgst=$row_cons2['labour_sgst'];
    $labour_cgst=$row_cons2['labour_cgst'];
    $qty=$row_cons2['qty'];
    $part_price=$row_cons2['part_price'];
    
//   $qty=$row_cons['qty'];

    if($part_mrp == ''){
        $pps = $part_price;
    } else{
        $pps = $part_mrp;
    }
    
    $ap_service .= '<tr>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$ex_service_name.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.$pps.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.($part_mrp*$part_sgst/100).'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.($part_mrp*$part_cgst/100).'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.$labour_mrp.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.($labour_mrp*$labour_sgst/100).'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.($labour_mrp*$labour_cgst/100).'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.$part_price.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$qty.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.$ex_price.'</td>
        		</tr>';  
}}
else{
    $ap_service = '';
}

$total_pay3 = array_sum($ex_price2);
$total_pay1 = array_sum($cart_price1);
// $total_pay2 = array_sum($ex_price1);


$sub = ($total_pay1+$total_pay3);

$sub_after_discount = ($total_pay1+$total_pay3-$extra_discount);

$need_to_pay = $sub_after_discount - $total_paid;

if($extra_discount != 0){
        $disc = '<tr>
        			<th colspan="8" style="border: 1px solid #dddddd;text-align: left;padding: 8px;"></th>
        			<th colspan="" style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Extra Discount</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.$extra_discount.'.00</th>
        		</tr>';
                
} else{
    $disc = '';
}

 $data = '<body style="margin: 0px;"><div style="padding:10px; border:1px solid black;">
    <div style="width:50%">
        <div style="width: 30%;"><img src="https://s3carmechanic.co.in/assets/img/s3car-logo1.png" style="width:200px;"></div>
        <div style="width:50%; font-size: 20px;margin-top: -70px;margin-left: 120px;"><p>S3 Car Mechanic</p></div>
    </div>
    <div style="width:50%;float: right;">
        <div style="font-size: 20px;margin-top: -70px;margin-left: 90px;float: right;"><p>ORDER#'.$ser_id.'</p></div>
    </div>
    <div>
        <strong>Aj Tech</strong><br>
        <span>A Company of s3 Car Mechanic</span><br>
        <span>GST No:33ACAFA5848A1ZX</span><br>
        <span>Ground Floor, Door No 1&2, 3rd Street,</span><br>
        <span>Vinayagapuram,Arumbakkam,Chennai-600106.</span><br>
        <br>
        <br>
        <strong>'.$pick_per_name.'</strong><br>
        <span>Phone : '.$pick_mobile_number.'</span><br>
        <span>'.$pick_address.'</span><br>
        '.$gsts.'
        
    </div>
    <div><hr></div>
    <div>
        <h4>Customer Car Details</h4>
        <table style="font-family: arial, sans-serif; border-collapse: collapse;width: 100%;">
        	<thead>
        		<tr>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Car Number</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Brand Name</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Modal Name</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Fuel Type</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Odometer Rd</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Workshop Name</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Delivery Date</th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$car_no.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$car_brand.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$car_modal.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$verient_name.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$odometer_reading.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$workshop_name.'</td>
        			<td style="border: 1px solid #dddddd;text-align: left;padding: 8px;">'.$new_date.'</td>
        		</tr>
        	</tbody>
        </table>
    </div>
    
    <div>
        <h4>Service Detail</h4>
        <table style="font-family: arial, sans-serif; border-collapse: collapse;width: 100%;">
        	<thead>
        		<tr>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Service Name</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Price</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Qty</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">CGST</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">SGST</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Total</th>
        		</tr>
        	</thead>
        	<tbody>'.$service_de.'</tbody>
        </table>
    </div>
    
    <div>
        <h4>Extra Service Detail</h4>
        <table style="font-family: arial, sans-serif; border-collapse: collapse;width: 100%;">
        	<thead>
        		<tr>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Service</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Price</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">SGST</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">CGST</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">labour Cost</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">labour SGST</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">labour CGST</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Sub Total</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Qty</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Total</th>
        		</tr>
        	</thead>
        	<tbody>
        		'.$ap_service.'
        		<tr>
        			<th colspan="8" style="border: 1px solid #dddddd;text-align: left;padding: 8px;"></th>
        			<th colspan="" style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Total</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.round($sub).'.00</th>
        		</tr>
        		'.$disc.'
        		<tr>
        			<th colspan="8" style="border: 1px solid #dddddd;text-align: left;padding: 8px;"></th>
        			<th colspan="" style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Sub Total</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.round($sub_after_discount).'.00</th>
        		</tr>
        		<tr>
        			<th colspan="8" style="border: 1px solid #dddddd;text-align: left;padding: 8px;"></th>
        			<th colspan="" style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Total Paid</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.round($total_paid).'.00</th>
        		</tr>
        		<tr>
        			<th colspan="8" style="border: 1px solid #dddddd;text-align: left;padding: 8px;"></th>
        			<th colspan="" style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Balance To Be Paid</th>
        			<th style="border: 1px solid #dddddd;text-align: left;padding: 8px;">Rs.'.round($need_to_pay).'.00</th>
        		</tr>
        	</tbody>
        </table><br><br>
        <div>
            <strong>Remarks : '.$invoice_remark.'</strong><br><br>
            <strong>Next Due Date : '.$next_due_date.'</strong>
        </div>
    </div>
    
    
    
</div></body>';

// exit();

$rapport = ob_get_clean();
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new mPDF();
$mpdf->showImageErrors = true;
$mpdf->WriteHTML($data);
$mpdf->Output("$ser_id.pdf", 'F');


echo json_encode(array("status"=>true, "link"=>"https://s3.teckzy.co.in/mpdf/$ser_id.pdf"));