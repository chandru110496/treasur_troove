<?php

//action.php

session_start();

include("../include/config.php");

if(isset($_POST["action"]))
{
	if($_POST["action"] == "minus")
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
                foreach($_SESSION["cart"] as $k => $v) 
            {
					if($_POST["product_id"] == $k)
						unset($_SESSION["cart"][$k]);				
					if(empty($_SESSION["cart"]))
						unset($_SESSION["cart"]);
            
			}
        echo true;
                exit();
               
            } 
        
        
    }
	
}

?>