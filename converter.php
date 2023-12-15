<?php
// Define the exchange rates.
$exchange_rates = array(
  "USD" => 1.00,
  "EUR" => 0.9,
  "GBP" => 0.8,
  "IND" => 78.00,
);
// Get the user input.
$from_currency = $_POST["from_currency"];
$to_currency = $_POST["to_currency"];
$amount = $_POST["amount"];

// Convert the amount to the desired currency.
$converted_amount = $amount * $exchange_rates[$to_currency];

// Display the converted amount.
echo $converted_amount;

?>
