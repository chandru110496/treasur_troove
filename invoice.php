 
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">


<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"> </script>
<script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"> </script>
<?php

include ('include/head.php');
include ('include/database.php');

?>
<style>
    .pdf{
        border-radius:25px;
        background-color:#00aefe;
        background-color:rgb(112 1 50);
        color:#fff !important;
        border:1px solid rgb(112 1 50);
        padding: 5px 20px!important;
    }
     a{
        color:#fff;
        font-weight:600;
    }

    .style{
display: grid;
place-items: center;

    }

    .card-header{
        width:1100px;
        margin:auto;
    }
    .card{
        width:1100px;
        margin:auto;
    }

    .dbtent-header-title{

        display: grid;
        place-items: center;
        width: 1300px;
        margin: auto;
    }
</style>



 <!-- BEGIN: dbtent-->
 <div class="app-dbtent dbtent">
      <div class="dbtent-wrapper">
        <div class="dbtent-wrapper-before"></div>
        <div class="dbtent-header row">
          <div class="dbtent-header-left col-md-4 col-12 mb-2">
            <h3 class="dbtent-header-title" style="margin:30px"> Create Invoice</h3>
          </div>
        </div>
        <div class="dbtent-body"><!-- Basic form layout section start -->
	        <section id="dbfiguration">
                    <div class="row">
                        <div class="col-12 style" >
                            <div class="card">
                                <div class="card-header">
                                    <!--<table border="0" cellspacing="5" cellpadding="5">-->
                                    <!--    <tbody>-->
                                    <!--        <tr>-->
                                    <!--            <td  style="font-size:20px;font-weight:20px;font-weight: bold;">Minimum date:</td><br>-->
                                    <!--            <td><input  class="form-dbtrol" type="text" id="min" name="min"></td>-->
                                    <!--            <td style="font-size:20px; font-weight:20px;font-weight: bold;">Maximum date:</td><br>-->
                                    <!--            <td><input  class="form-dbtrol" type="text" id="max" name="max"></td>-->
                                    <!--            <td>-->
                                    <!--                <button class="btn btn-success" onclick="filterDate()">Submit</button>-->
                                    <!--            </td> -->
                                    <!--        </tr>-->
                                            
                                    <!--    </tbody>-->
                                    <!--</table>-->
                                <div>
                            </div>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <br>
                                <div class="card-dbtent collapse show">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive"  id="example">
                                            <!-- <table id="example" class="table table-striped table-bordered"> -->
                                            <table class="table table-hover shop-table account-orders-table mb-6">
                                            











                                                <thead>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Invoice Date</th>
                                                        <th>Receiver Name</th>
                                                        <!--<th>Brand Name</th>-->
                                                        <!--<th>Item Name</th>-->
                                                        <th>Total Amount</th>
                                                        <!-- <th>Payment</th> -->
                                <th>PDF</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                
                $query1 = "SELECT * FROM `invoice`
                JOIN `order` ON `order`.`order_id` = `invoice`.`order_for_id`
";
                            $query_run1 = mysqli_query($db,$query1);

                           

                            $count =1;
                         
                            if(mysqli_num_rows($query_run1) > 0){
                                // foreach($query_run as $row)
                                while( $row1 = mysqli_fetch_assoc($query_run1))
                            
                                {
                                    ?>
                                    
                                    <tr>
                                    <td><?=$count?></td>
                                    <td><?=date('Y-m-d',strtotime($row1['invoice_date'])) ?></td>
                                    <td><?= $row1['receiver_name']; ?></td>
                                    <!--<td><?= $row2['brand']; ?></td>-->
                                    <!--<td><?= $row2['item_name']; ?></td>-->
                                    <td><?= $row1['total_amount']; ?></td>
                                    <!-- <td><?= $row1['order_id']; ?></td> -->
                                    <!-- <td><?= $row1['payment']; ?></td> -->
                                    <td><button class="pdf"><a href="printpdf.php?id=<?php echo $row1['sid']?>">PDF</a></button></td>
                             <td><a href="delete.php?del_inv=<?php echo $row1['sid'];?>" ><i class="fas fa-trash fip deleteic" style="color:grey;"></i></a></td>
                                    </tr>                                                         
                                <?php
                                $count++;
                                }
                            }
                            else
                                                    {
                                                    ?>
                                                    <tr>
                                                        <td colspan="6">No Records Found</td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
												
                                            </tfoot>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<script>
    $(document).ready(function () {

        $('.deleteic').on('click', function () {

            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            dbsole.log(data);

            $('#delete_id').val(data[0]);

        });
    });
</script>
<script>
var minDate, maxDate;

// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
 function( settings, data, dataIndex ) {
     var min = minDate.val();
     var max = maxDate.val();
     var date = new Date( data[2] );

     if (
         ( min === null && max === null ) ||
         ( min === null && date <= max ) ||
         ( min <= date   && max === null ) ||
         ( min <= date   && date <= max )
     ) {
         return true;
     }
     return false;
 }
);

$(document).ready(function() {
 // Create date inputs
 minDate = new DateTime($('#min'), {
     format: 'MMMM Do YYYY'
 });
 maxDate = new DateTime($('#max'), {
     format: 'MMMM Do YYYY'
 });

 // DataTables initialisation
 var table = $('#example').DataTable({
    dom: 'Bfrtip',
    buttons: [
        { 
            extend: 'excelHtml5', text: 'Export to Excel',
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7,8,9] // Column index which needs to export
            },
            customizeData: function (data) {
                dbsole.log(data)
                var serialno=1;
                    for (var i = 0; i < data.body.length; i++) {
                        data.body[i][0] = serialno;
                            serialno++;
                    }
                }
         }
    ]
} );
// Refilter the table
 $('#min, #max').on('change', function () {
    
    
     table.draw();
 });
});
 
</script>


<script>

function filterDate(){
var minDate = $("#min")
var maxDate = $("#max")
minDate = new DateTime($('#min'), {
    format: 'MMMM Do YYYY'
});
maxDate = new DateTime($('#max'), {
    format: 'MMMM Do YYYY'
});
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        dbsole.log(data[2]);
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date( data[2] );
        dbsole.log(min);
        if (
            ( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date   && max === null ) ||
            ( min <= date   && date <= max )
        ) {
            return true;
        }
        return false;
    }
);
var table = $('#example').DataTable();
table.draw();
}
</script>
            </div>
        </div>
    </div>
 