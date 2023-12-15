
<?php include("include/database.php");
 
if(!empty($_POST['country'])){ 
    // Fetch state data based on the specific country 
    $getiso2 = $_POST['country'];
    //  echo( $getiso2);
     $Singlequery = "SELECT * FROM `countries` WHERE `sortname`='$getiso2'"; 
      $GetIdResult = $db->query($Singlequery); 
   
     $singlerow = $GetIdResult->fetch_assoc();	
	$GetCountryID = $singlerow['id'];
	
	// Fetch state data based on the specific country
   echo $query = "SELECT * FROM `states` WHERE `country_id` = '$GetCountryID'"; 
    $result = $db->query($query);
    
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select State</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['sortname'].'">'.$row['name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">State not available</option>';       
    } 
}elseif(!empty($_POST['state_iso2'])){ 
	$getStateiso2 = $_POST['state_iso2'];
	$sel_country_Val = $_POST['sel_country_id'];
    
    // Fetch state id data based on the specific state iso2 and country code value
    $Singlequery = "SELECT * FROM states WHERE iso2 = '".$getStateiso2."' AND country_code = '".$sel_country_Val."' AND flag = 1"; 
    $GetIdResult = $db->query($Singlequery); 
    $singlerow = $GetIdResult->fetch_assoc();
	
	$GetStateID = $singlerow['id'];
	
    // Fetch city data based on the specific state id
    $query = "SELECT * FROM cities WHERE state_id = ".$GetStateID." AND flag = 1 ORDER BY name ASC"; 
    $result = $db->query($query); 
     
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select city</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">City not available</option>'; 
    } 
} 
?>