
    <!-- "apikey: i4GsH9EZGVx6brz6PwYyjzAu7ECTyyt9" 
  i4GsH9EZGVx6brz6PwYyjzAu7ECTyyt9
  -->
 


  <!-- // $amount = 100; // Amount to convert
                    // $fromCurrency = 'AMD'; // Currency to convert from
                    // $toCurrency = 'EUR'; // Currency to convert to
                    
                    // $curl = curl_init();
                    
                    // curl_setopt_array($curl, array(
                    //   CURLOPT_URL => "https://api.apilayer.com/currency_data/convert?amount=$product_new_price&from=$fromCurrency&to=$toCurrency",
                    //   CURLOPT_HTTPHEADER => array(
                    //     "Content-Type: application/json",
                    //     "apikey:ZqD96kWlrqvEWOKQTYrjLM40JtAB0sm5"
                    //   ),
                    //   CURLOPT_RETURNTRANSFER => true,
                    //   CURLOPT_ENCODING => "",
                    //   CURLOPT_MAXREDIRS => 10,
                    //   CURLOPT_TIMEOUT => 0,
                    //   CURLOPT_FOLLOWLOCATION => true,
                    //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    //   CURLOPT_CUSTOMREQUEST => "GET"
                    // ));
                    
                    // $response = curl_exec($curl);
                    
                    // if ($response === false) {
                    //   echo 'cURL Error: ' . curl_error($curl);
                    // } else {
                    // //    echo $response;
                    //   header("location:buy.php");
                    // }
                    
                    // curl_close($curl);
                     -->

<?php

// Fetching JSON
$api_key = 'e1cbe9d7cd31b9bb8ff06a9e';
$base_currency = 'USD';
// $target_currency = 'EUR';
// $url = "https://api.exchangerate-api.com/v4/latest/{$base_currency}";
$url ="https://v6.exchangerate-api.com/v6/e1cbe9d7cd31b9bb8ff06a9e/latest/INR";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response, true);

$usd=$data['conversion_rates']['USD'];

$result=1000*$usd;
print_r($result);


