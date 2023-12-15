
<?php
include "fpdf185/fpdf.php";
include('include/database.php');

ob_start();

$id = $_GET['id'];
// $id = 16;
$invoice = "SELECT * FROM  `invoice` 
JOIN `order` ON `order`.`order_id` = `invoice`.`order_for_id`
JOIN `product_details` ON `order`.`product_id` = `product_details`.`product_id`
WHERE `order_id` = '$id'";

$order = "SELECT *
FROM `order`
JOIN `product_details` ON `order`.`product_id` = `product_details`.`product_id`

 WHERE `order`.`order_id` = '$id'";


// echo $order;
$result = mysqli_query($db, $invoice);

$result2 = mysqli_query($db, $order);

if ($result && $result2) {
    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result2);


    $info = [
        'receiver_name' => $row['receiver_name'],
        'Billing_Address' => $row['billing_address'],
        'order_id' => $row['order_id'],
        'invoice_date' => date("d-m-y", strtotime($row['invoice_date'])),
        'total_amount' => $row['total_amount'],
        'total_weight' => $row['total_weight'],
        'total_touch' => $row['total_touch'],
        'total_fine' => $row['total_fine']
        //  'product_name'=>$row['product_name']
        //  'total_amount'=>$row2['total_amount'],
        //  'silver_amount'=>$row2['silver_amount'],
        //  'mc'=>$row2['mc'],
        //  'tmc'=>$row2['tmc'],


    ];
}
$product_info = [];

$order = "SELECT *
FROM `order`
JOIN `product_details` ON `order`.`product_id` = `product_details`.`product_id`
JOIN `billing_address` ON `order`.`user_id` = `billing_address`.`user_id`
 WHERE `order_id` = '$id' ORDER BY `order`.`product_id`";


$result2 = mysqli_query($db, $order);
if ($result2) {
    while ($row = mysqli_fetch_assoc($result2)) {
        $product_info = [
            [
                'id' => $row["product_id"],
                'brand' => $row['brand_name'],
                'product_name' => $row['product_name'],
                // 'action' => $row['action'],
                // 'weight' => $row['weight'],
                // 'touch' => $row['touch'],
                // 'fine' => $row['fine'],
                // 'paid' => $row['paid'],
                // 'balance' => $row['balance']
            ],

        ];
    }
}


class pdf extends fpdf
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 13);
        $this->Cell(50, 10, "", 0, 1);
        $this->SetFont('Arial', '', 12);
        $this->Cell(50, 7, "919 Leslie Road", 0, 1);
        $this->Cell(50, 7, "Address : Charleston, WV. 25314, U.S.A.", 0, 1);
        $this->Cell(50, 7, "Email:help@etradespace.com", 0, 1);


        $this->SetY(10);
        $this->SetX(-35);
        $this->SetFont('Arial', 'B', 18);
        $this->Image('assets/images/logo.png', 170, 10, 30, 30, 'PNG');
        $this->Line(0, 48, 210, 48);
    }

    function bill($info, $product_info)
    {
        $this->SetY(55);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(60, 8, "TO ,", 0, 1);
        $this->Cell(60, 8, "RECEIVER (BILL TO):", 0, 1);
        $this->SetFont('Arial', '', 11);
        $this->Cell(50, 7, 'Name : ' . $info['receiver_name'], 0, 1);
        $this->Cell(50, 7, 'Billing Address: ' . $info['Billing_Address'], 0, 1);
        // $this->Cell(50,7,$info['city'],0,1);

        $this->SetY(68);
        $this->SetX(-55);
        $this->Cell(50, 7, 'Invoice No:' . $info['order_id']);

        $this->SetY(77);
        $this->SetX(-55);
        $this->Cell(50, 7, 'Invoice Date:' . $info['invoice_date']);

        $this->SetY(95);
        $this->SetX(12);
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(9, 10, "S.No", 1, 0, "C");
        $this->Cell(20, 10, "Brand", 1, 0, "C");
        $this->Cell(20, 10, "Products", 1, 0, "C");


        $this->Cell(22, 10, "Total Amount", 1, 0, "C");






        $this->SetY(105);
        $this->SetX(12);

        $id = $_GET['id'];
        // $id = 16;

        $cate = "SELECT *
        FROM `order`
        JOIN `product_details` ON `order`.`product_id` = `product_details`.`product_id`
        JOIN `billing_address` ON `order`.`user_id` = `billing_address`.`user_id`
         WHERE `order_id` = '$id'";

        // $db = mysqli_connect("localhost","traitspm_treasure","traitspm_treasure","traitspm_treasure");

        $db = mysqli_connect("localhost", "root", "", "treasure");
        // $db = mysqli_connect("localhost", "u541379268_treasure", "Teckzy@123", "u541379268_treasure");



        $count = 1;
        $y_direction = 105;
        $result = mysqli_query($db, $cate);
        if ($result) {

            while ($row = mysqli_fetch_assoc($result)) {
                $this->SetX(12);
                $this->Cell(9, 10, $count, "LR", 0, "C");
                $this->Cell(20, 10, $row['brand_name'], "LR", 0, "C");
                $this->Cell(20, 10, $row['product_name'], "C", 0, "C");

                $this->Cell(22, 10, $row['total_amount'], "R", 0, "C");

                $this->SetY($y_direction += 5);

                $count++;
            }
        }

        $this->SetX(12);
        $this->Cell(9, 10, "", "LR", 0);
        $this->Cell(20, 10, "", "R", 0, "R");
        $this->Cell(20, 10, "", "R", 0, "R");
        $this->Cell(22, 10, "", "R", 1, "C");
        $this->SetX(12);

        $this->Cell(9, 10, "", "LR", 0);
        $this->Cell(20, 10, "", "R", 0, "R");
        $this->Cell(20, 10, "", "R", 0, "R");





        $this->Cell(22, 10, "", "R", 1, "C");
        $this->SetX(12);
        $this->Cell(49, 10, "Total", 1, 0, "L");


        $this->Cell(22, 10, $info['total_amount'], 1, 1, "R");
    }

    function Footer()
    {

        $this->Ln(125);
        $this->SetFont("Arial", "B", 12);
        $this->Cell(0, 5, "Treasure Troove   ", 0, 1, "R");


        $this->Cell(0, 5, "Authorised Signature", 0, 1, "R");
        $this->SetFont("Arial", "", 10);
    }
}
$pdf = new pdf("P", "mm", "A4");
$pdf->AddPage();
$pdf->bill($info, $product_info);
$pdf->Output();

ob_end_flush();


?>