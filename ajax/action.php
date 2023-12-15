<?php

session_start();

include("../include/database.php");

if(isset($_POST["action"]))
{
	if($_POST["action"] == "add")
	{
        // $pid = $_POST["product_id"];
        $id = $_POST["product_id"];
        $product_quantity = $_POST["product_quantity"];       
         if(isset($_SESSION['cart'][$id]))
            { 
                $_SESSION['cart'][$id]['qty']+=$product_quantity; 
                echo true;
                exit();
            }
          else
          { 
                $sql_s="SELECT * FROM product_details WHERE product_id={$id}"; 
                $query_s=mysqli_query($db, $sql_s); 

                if(mysqli_num_rows($query_s)!=0)
                { 
                    $row_s=mysqli_fetch_array($query_s); 
                    $_SESSION['cart'][$row_s['product_id']]=array("qty" => $product_quantity,"price" => $row_s['product_new_price']); 
                    
                    echo true;
                    exit();
                }
              else
              {       
                echo false;
                exit();
              }      
            }  
    }
	if($_POST["action"] == 'remove')
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["product_id"] == $_POST["product_id"])
			{
				unset($_SESSION["cart"][$keys]);
			}
		}
	}
	if($_POST["action"] == 'empty')
	{
		unset($_SESSION["shopping_cart"]);
	}
}

?>