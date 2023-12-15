<?php include("include/database.php");



// Fetch countries from the database
$countries = mysqli_query($db, "SELECT * FROM countries");

// Fetch states based on the selected country
if (isset($_POST['country_id'])) {
    $country_id = $_POST['id'];
    $states = mysqli_query($db, "SELECT * FROM states WHERE country_id = $country_id");
}

// Fetch cities based on the selected state
if (isset($_POST['state_id'])) {
    $state_id = $_POST['state_id'];
    $cities = mysqli_query($db, "SELECT * FROM cities WHERE state_id = $state_id");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Country, State, and City Dropdown</title>
</head>
<body>
    <h1>Country, State, and City Dropdown</h1>

    <form method="post" action="">
        <label for="country">Country:</label>
        <select id="country" name="country_id">
            <option value="">Select Country</option>
            <?php while ($row = mysqli_fetch_assoc($countries)) { ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php } ?>
        </select>
        <label for="state">State:</label>
        <select id="state" name="state_id">
            <option value="">Select State</option>
            <?php if (isset($states)) {
                while ($row = mysqli_fetch_assoc($states)) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                <?php }
            } ?>
        </select>
        <label for="city">City:</label>
        <select id="city" name="city_id">
            <option value="">Select City</option>
            <?php if (isset($cities)) {
                while ($row = mysqli_fetch_assoc($cities)) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                <?php }
            } ?>
        </select>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
// Close the database dbection
mysqli_close($db);
?>


