<?php 
include ('include/head.php');
include ('include/database.php');

?>
<div>
    <h3 style="text-align:center">Create Invoice</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row" style="padding:20px">
            <div class="form-group col-md-6">
                <h5>To,</h5>
                <p>RECEIVER (BILL TO)</p>
                <input type="text" class="form-dbtrol" name ="receiver_name" placeholder="Enter Receiver Name" required><br>
                <textarea name="billing_address"class="form-dbtrol" id="" cols="30" rows="10" placeholder="Enter Billing Address" required></textarea>
            </div>
            <div class="form-group col-md-6">
                <p style="margin-top:30px">Reverse Charge</p>
                <input type="text" class="form-dbtrol" name ="invoice_num" placeholder="Enter Invoice No" required><br>
                <input type="date" class="form-dbtrol" name ="invoice_date" value =<?php echo date('Y-m-d H:i:s'); ?>><br>
            </div>
            <div class="somelist">
                <div class="dbtainer1">
                    <div id="refresh-section">
                        <div class="row form_row">
                            <div class="form-group col-md-4 ">
                                <label>Brand Name</label>
                                <div>
                                    <input type="text" class="form-dbtrol" name ="brand[]" id="brand" placeholder="Enter Brand Name" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Item Name</label>
                                <div>
                                    <input type="text" class="form-dbtrol" name ="item_name[]" id="item_name" placeholder="Enter Item Name" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Action</label>
                                <select class= "form-select" name="action[]" id="action" required>
                                    <option value="">Select Action</option>
                                    <option value="Sale">Sales</option>
                                    <option value="Purchase">Purchase</option>
                                    <option value="Sales Return">Sales Return</option>
                                    <option value="Purchase Return">Purchase Return</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 parent">
                                <label>Weight</label>
                                <input type="text" class="form-dbtrol" name ="weight[]" id="weight" placeholder="Enter Weight" required>
                            </div>
                            <div class="form-group col-md-4 parent">
                                <label>Touch</label>
                                <input type="text" class="form-dbtrol" name ="touch[]" id="touch" placeholder="Enter Touch" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Fine</label>
                                <input type="text" class="form-dbtrol" name ="fine[]" id="fine" readonly required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Silver Amount</label>
                                <input type="text" class="form-dbtrol" name ="silver_amount[]" id="silver_amount" placeholder="Enter Silver Amount" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Total Silver Amount</label>
                                <input type="text" class="form-dbtrol" name ="total_amount[]" id="total_amount" readonly required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>MC</label>
                                <input type="text" class="form-dbtrol" name ="mc[]" id="mc"  placeholder="Enter MC" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>TMC</label>
                                <input type="text" class="form-dbtrol" name ="tmc[]" id="tmc"  placeholder="Enter TMC" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Final Amount</label>
                                <input type="text" class="form-dbtrol" name ="total_amounts[]" id="total_amounts" readonly required>
                            </div>
                            <div class="form-group col-md-4">
                                <label> Amount </label>
                                <div>
                                    <input type="text" class="form-dbtrol" id="amount" name="amount[]" placeholder="Amount" required>
                                </div>                        
                            </div>
                            
                           
                                     
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                                <label>Payment</label>
                                <select class= "form-select" name="payment" id="payment" required>
                                    <option value="">Select Payment</option>
                                    <option value="Cash">Cash</option>
                                    <option value="RTGS">RTGS</option>
                                    <option value="IMTS">IMPS</option>
                                    <option value="NEFT">NEFT</option>
                                    <option value="Rate Cut">Rate Cut</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Total Amount </label>
                                <div>
                                    <input type="text" class="form-dbtrol" id="grand_amount" name="grand_amount" placeholder="Amount" required>
                                </div>                        
                            </div>
                            <div class="form-group col-md-4" style="display:none;">
                                <label> Total Weight </label>
                                <div>
                                    <input type="text" class="form-dbtrol" id="total_weight" name="total_weight" placeholder="Total Weight" required>
                                </div>                        
                            </div>
                            <div class="form-group col-md-4 " style="display:none;">
                                <label> Total Touch </label>
                                <div>
                                    <input type="text" class="form-dbtrol" id="total_touch" name="total_touch" placeholder="Tota Touch" required>
                                </div>                        
                            </div>
                            <div class="form-group col-md-4 " style="display:none;">
                                <label> Total Fine </label>
                                <div>
                                    <input type="text" class="form-dbtrol" id="total_fine" name="total_fine" placeholder="Tota Touch" required>
                                </div>                        
                            </div>
            <div class="form-group col-md-4" style="margin-top:30px">
                <button class="btn btn-primary add_form_field mb-1" type="button" onclick="refreshDiv();">
                    + Add
                </button>
            </diV>  
        </div>
       
        <div class="text-center">
            <a href="invoice.php"><button type="button" name = "closedata" class="operbtn closebtn">Close</button></a>
            <input type="submit" name="submit" class="addnew"></input>
        </div>
    </form>
</div>
<?php
if (isset($_POST['submit'])) 
{
    $receiver_name = $_POST['receiver_name'];
    $billing_address = $_POST['billing_address'];
    $invoice_num = $_POST['invoice_num'];
    $invoice_date  = date('Y-m-d H:i:s');

    $payment = $_POST['payment'];
    $grand_amount = $_POST['grand_amount'];
    $total_weight = $_POST['total_weight'];
    $total_touch = $_POST['total_touch'];
    $total_fine = $_POST['total_fine'];
    $rinsert = "INSERT INTO `invoice`(`receiver_name`,`billing_address`, `invoice_num`, `invoice_date`,`payment`,`grand_amount`,`total_weight`,`total_touch`,`total_fine`) VALUES ('$receiver_name','$billing_address','$invoice_num','$invoice_date','$payment','$grand_amount','$total_weight','$total_touch','$total_fine')";

    if($db->query($rinsert)){

        $sid=$db->insert_id;

        $insert = "INSERT INTO `order`(`brand`,`item_name`,`action`,`weight`,`touch`, `fine`, `silver_amount`,`total_amount`,`mc`,`tmc`,`total_amounts`,`sid`)VALUES ";
        $rows = [];
        for($i=0;$i<count($_POST['brand']);$i++){
                    $brand = $_POST['brand'][$i];
                    $item_name = $_POST['item_name'][$i];
                    $action = $_POST['action'][$i];
                    $weight = $_POST['weight'][$i];     
                    $touch = $_POST['touch'][$i];     
                    $fine = $_POST['fine'][$i];     
                    $silver_amount = $_POST['silver_amount'][$i];     
                    $total_amount = $_POST['total_amount'][$i];     
                    $mc = $_POST['mc'][$i];     
                    $tmc = $_POST['tmc'][$i];     
                    $total_amounts = $_POST['total_amounts'][$i];       
                    $amount = $_POST['amount'][$i]; 
            
                $rows[]="('{$brand}','{$item_name}','{$action}','{$weight}','{$touch}','{$fine}','{$silver_amount}','{$total_amount}','{$mc}','{$tmc}','{$total_amounts}',{$sid})";
            
            
                    
        }

        $insert.=implode(",",$rows);
    
   
    
   
    
    
    
    if(mysqli_query($db, $insert))
    {
        // echo "<script>alert('invoice added successfully')
        //         window.location='invoice.php';
        //         </script>";
     
        // $sql = "SELECT balance_stock FROM stock WHERE stock_date = (SELECT MAX(stock_date) FROM stock WHERE item_name = '$item_name')";
        // $login_result=mysqli_query($db,$sql);
        // $balance_stock = mysqli_fetch_assoc($login_result);
        // $stock = $balance_stock['balance_stock'];   
        // if($action == 'Purchase'){
        //     $balance_stocks = $stock + $amount;
        // }
        // else {
        //     $balance_stocks = $stock - $amount;
        // }
    
       
        // $stinsert = "INSERT INTO `stock`(`stock_date`,`item_name`, `brand`, `amount`, `balance_stock`, `action`) VALUES ";
        // $rows2 = [];
        // for($i=0;$i<count($_POST['brand']);$i++){
        //     $sid=$db->insert_id;
        //     $item_name = $_POST['item_name'][$i];
        //     $brand = $_POST['brand'][$i];
            
        //     $amount = $_POST['amount'][$i]; 
        //     $action = $_POST['action'][$i];
       
        //     $rows2[]="'$invoice_date','{$item_name}','{$brand}','{$amount}','$balance_stock','{$action}'";

            
        // }
        // $stinsert.=implode(",",$rows2);
    
    
        // $balance_stock = abs($balance_stocks);

  
       
    
        // if(mysqli_query($db, $stinsert))
        // {
            $stock_date  = date('Y-m-d H:i:s');
            $action = 'Sale';
            $tsql = "SELECT balance_amount FROM expense WHERE expenses_date = (SELECT MAX(expenses_date) FROM expense)";
            $tlogin_result=mysqli_query($db,$tsql);
            $balance_stock = mysqli_fetch_assoc($tlogin_result);
            $amount = $balance_stock['balance_amount'];  
            if($action == 'Sale'){
                $balance_amounts = $grand_amount + $amount;
            }
            else {
                $balance_amounts = $grand_amount - $amount;
            }
            $balance_amount = abs($balance_amounts); 
            $profit = "Customer";


        //     $sid=$db->insert_id;
            $invinsert = "INSERT INTO `expense`(`expenses_date`,`expense`,`amount`,`balance_amount`,`action`) VALUES ('$stock_date','$profit','$grand_amount','$balance_amount','$action')";
            if(mysqli_query($db, $invinsert))
            {
                echo "<script>alert('Invoice and expenses added successfully')
                window.location='invoice.php';
                </script>";
            }
            else{
                echo "<script>alert('Error in adding expenses')
                window.location='invoice.php';
                </script>";
            }
        }
        // else
        // {
        //     echo "<script>alert('Error in adding stock')
        //     window.location='invoice.php';
        //     </script>";
        // } 
    }
    else{
        echo "<script>alert('Error in adding order')
            window.location='invoice.php';
            </script>";
    }
}
    
// }
// }
?>
<script>
    // function refreshDiv(){
    //     $('#refresh-section').load(location.href + " #refresh-section");
    // }
    $(document).ready(function() {

        var final_total_amt = $('#amount').text();
        var count = 1;


        $(document).on('click', '.add_form_field', function(){
          count++;
          $('#total_item').val(count);
          var html_code = '';


          html_code += '<div class="row form_row"><div class="row"><div class="col-md-12 "><button class="btn btn-danger float-end btn-row-remove  mb-1 " type="button">X</button></div></div><div class="form-group col-md-4"><label>Brand Name</label><input type="text" class="form-dbtrol" name ="brand[]" id="brand" placeholder="Enter Brand Name" required></div><div class="form-group col-md-4"><label>Item Name</label><input type="text" class="form-dbtrol" name ="item_name[]" id="item_name" placeholder="Enter Item Name" required></div><div class="form-group col-md-4"><label>Action</label><select class= "form-select" name="action[]" id="action" required><option value="">Select Action</option><option value="Sale">Sales</option><option value="Purchase">Purchase</option><option value="Sales Return">Sales Return</option><option value="Purchase Return">Purchase Return</option></select></div><div class="form-group col-md-4"><label>Weight</label><input type="text" class="form-dbtrol weight" name ="weight[]" id="weight"placeholder="Enter Weight" required></div><div class="form-group col-md-4"><label>Touch</label><input type="text" class="form-dbtrol touch" name ="touch[]" id="touch" placeholder="Enter Touch" required></div><div class="form-group col-md-4"><label>Fine</label><input type="text" class="form-dbtrol fine" name ="fine[]" id="fine" readonly required></div><div class="form-group col-md-4"><label>Silver Amount</label><input type="text" class="form-dbtrol" name ="silver_amount[]" id="silver_amount" placeholder="Enter Silver Amount" required></div><div class="form-group col-md-4"><label>Total Silver Amount</label><input type="text" class="form-dbtrol" name ="total_amount[]" id="total_amount" readonly required></div><div class="form-group col-md-4"><label>MC</label><input type="text" class="form-dbtrol mc" name ="mc[]" id="mc"  placeholder="Enter MC" required></div><div class="form-group col-md-4"><label>TMC</label><input type="text" class="form-dbtrol" name ="tmc[]" id="tmc"  placeholder="Enter TMC" required></div><div class="form-group col-md-4"><label>Final Amount</label><input type="text" class="form-dbtrol total_amounts" name ="total_amounts[]" id="total_amounts" readonly required></div>    <div class="form-group col-md-4"><label> Amount </label><input type="text" class="form-dbtrol" id="amount" name="amount[]" placeholder="Amount" required></div></div>';



          $('.dbtainer1').append(html_code);
        });
        $("body").on("click",".btn-row-remove",function(){

            if(dbfirm("Are You Sure!")){
                $(this).closest(".form_row").remove();
            }
            Total_amounts();
        });

            $("body").on("keyup","#touch",function () {
                var touch = Number($(this).val());
                var weight =Number($(this).closest(".form_row").find("#weight").val());
                var touchs = touch/100;
     
                $(this).closest(".form_row").find("#fine").val(touchs * weight);
                Total_amounts();

            });
            $("body").on("keyup","#weight",function () {
                // var touch =  Number($("#touch").val());
                var weight =Number($(this).closest(".form_row").find("#touch").val());
                var weight = Number($(this).val());
                var touchs = touch/100;
             
                $(this).closest(".form_row").find("#fine").val(touchs * weight);
                Total_amounts();
           
            });
            $("body").on("keyup","#silver_amount",function () {
                var silver_amount = Number($(this).val());
                var fine = Number($(this).closest(".form_row").find("#fine").val());
         
                $(this).closest(".form_row").find("#total_amount").val(fine * silver_amount);
                $(this).closest(".form_row").find("#total_amounts").val(fine * silver_amount);
                Total_amounts();
            });
            $("body").on("keyup","#tmc",function () {
               
                var tmc = Number($(this).val());
                var mc = Number($(this).closest(".form_row").find("#mc").val());
                var total_amount =Number($(this).closest(".form_row").find("#total_amount").val());

                $(this).closest(".form_row").find("#total_amounts").val(mc+tmc +total_amount);
                Total_amounts();
            });
            // $("body").on("keyup","#tmc",function () {
             
            //     var tmc = Number($(this).val());
            //     var total_amount = Number($(this).closest(".form_row").find("#total_amounts").val());

            //     $(this).closest(".form_row").find("#total_amounts").val(tmc +total_amount);
         
            //     Total_amounts();
            // });


            function Total_amounts(){

                var tot=Number($("#total_amounts").val());

                var tot2=Number($("#weight").val());

                var tot3=Number($("#touch").val());

                var tot4=Number($("#fine").val());

                $(".weight").each(function(){
                    tot2=tot2+Number($(this).val());
                });
                $("#total_weight").val(tot2);

                $(".touch").each(function(){
                    tot3=tot3+Number($(this).val());
                });
                $("#total_touch").val(tot3);

                $(".fine").each(function(){
                    tot4=tot4+Number($(this).val());
                });
                $("#total_fine").val(tot4);


                $(".total_amounts").each(function(){
                    tot=tot+Number($(this).val());
                });
                $("#grand_amount").val(tot);

            }
 
        });
</script>
<script>




</script>