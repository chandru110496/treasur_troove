<?php

//action.php

session_start();

if(isset($_POST["action"]))
{
	if($_POST["action"] == "plus")
	{
        $pi = $_POST["product_id"];
        $product_quantity = $_POST["product_quantity"];
        
        
            if($product_quantity != 0) { 
                $_SESSION['cart'][$pi]['qty']=$product_quantity;
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

?>