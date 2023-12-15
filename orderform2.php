<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*
Author: Adnan Qaiser
Website: WWW.ADNANQAISER.COM
*/
@import "https://fonts.googleapis.com/css?family=Montserrat:300,400,700";
.rwd-table {
  margin: 1em 0;
  min-width: 300px;
}
.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}
.rwd-table th {
  display: none;
}
.rwd-table td {
  display: block;
}
.rwd-table td:first-child {
  padding-top: .5em;
}
.rwd-table td:last-child {
  padding-bottom: .5em;
}
.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 6.5em;
  display: inline-block;
}
@media (min-width: 480px) {
  .rwd-table td:before {
    display: none;
  }
}
.rwd-table th, .rwd-table td {
  text-align: left;
}
@media (min-width: 480px) {
  .rwd-table th, .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child, .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child, .rwd-table td:last-child {
    padding-right: 0;
  }
}

body {
  padding: 0 2em;
  font-family: Montserrat, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  color: #444;
      background-image: url(https://digitalforge.qa/images/codepen/coffee.png), url(https://digitalforge.qa/images/codepen/bg.png);
    background-position: right center, left top;
    background-color:#eeeeee;
    background-repeat: no-repeat, repeat;
    background-attachment: fixed;
}

h1 {
  font-weight: normal;
  letter-spacing: -1px;
  color: #34495E;
}

.rwd-table {
  background: #34495E;
  color: #fff;
  border-radius: .4em;
  overflow: hidden;
}
.rwd-table tr {
  border-color: #46637f;
}
.rwd-table th, .rwd-table td {
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .rwd-table th, .rwd-table td {
    padding: 1em !important;
  }
}
.rwd-table th, .rwd-table td:before {
  color: #fff;
}
  .fa, .fas {
    font-weight: 900;
    font-size: 50px;
    color: #6E4D33;
  }
  .button {
  background-color: #6E4D33;
  border: none;
  color: white;
  padding: 15px 39px;
  text-align: center;
  text-decoration: none;
  display: inline-flex;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 180px;
  height: 50px;
}
.result {
  background-color: #34495E;
  color: #fff;
  padding: 15px 32px;
  text-align: center;
  font-size: 40px;
  margin: 4px 2px;
  width: 304px;
  height: 50px;
  display:block;
}
.button:hover {
  background-color: #FFFFFF;
  border: 1px solid #333;
  color: #333;
  font-weight: normal;
}
.credits{
  margin-top:50px; 
  padding:20px;
  border-radius:5px;
  width:450px;
  text-align:center;
  color:gray;
}
a {
  color:gray;
  text-decoration:none;
}
a:hover{
  color:#34495E;
}
    </style>
</head>
<body>
    <h1><i class="fas fa-mug-hot"></i> Order Form</h1>
    <table class="rwd-table">
      <tr>
        <th>Coffee Name</th>
        <th>Price</th>
        <th>Quantity</th>
      </tr>
      <tr>
        <td data-th="title">Latte</td>
        <td data-th="price">USD 2.00</td>
        <td data-th="quantity"><input type="number" id="qty1" value="0" placeholder="Enter Quantity"/></td>
      </tr>
      <tr>
        <td data-th="title">Cappuccino</td>
        <td data-th="price">USD 5.00</td>
        <td data-th="quantity"><input type="number" id="qty2" value="0" placeholder="Enter Quantity"/></td>
      </tr>
      <tr>
        <td data-th="title">Espresso</td>
        <td data-th="price">USD 3.00</td>
        <td data-th="quantity"><input type="number" id="qty3" value="0" placeholder="Enter Quantity"/></td>
      </tr>
    </table>
    
    <p>&larr; Enter The Quantities & Hit Total Cost To Get The Price. &rarr;</p>
    <p>&larr; Click on Submit Order for placing your valuable order. &rarr;</p>

    <button onclick="total()" class="button" style="padding-left:48px;margin-left:40px;">Total Cost</button>
    <button onclick="submit()" class="button">Submit Order</button>
    <div class="result" id="total_cost" style="margin-left:40px;">USD 0.00</div>

<p class="credits"><a href="https://digitalforge.qa">Web Design Agency Doha</a> managed by <br><a href="https://www.adnanqaiser.com">Adnan Qaiser</a></p>
<script>
    function total() {
    var Latte;
    var Cappuccino;
    var Espresso;
    var sum;
    Latte = parseInt(document.getElementById("qty1").value);
    Cappuccino = parseInt(document.getElementById("qty2").value);
    Espresso = parseInt(document.getElementById("qty3").value);
    sum = (Latte * 2) + (Cappuccino * 5) + (Espresso * 3);
    document.getElementById("total_cost").innerHTML = "USD "+sum+".00";

  }
  function submit() {
    alert("Your Order has been Submitted, Successfully!");
  }
</script>
</body>
</html>