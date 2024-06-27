<?php
include '../config/db_config.php';

$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];
$mileage = $_POST['mileage'];
$price = $_POST['price'];
$fuel_type = $_POST['fuel_type'];
$color = $_POST['color'];
$previous_owners = $_POST['previous_owners'];
$description = $_POST['description'];
$condition = $_POST['condition'];

$sql = "INSERT INTO used_cars (brand, model, year, mileage, price, fuel_type, color, previous_owners, description, condition)
VALUES ('$brand', '$model', '$year', '$mileage', '$price', '$fuel_type', '$color', '$previous_owners', '$description', '$condition')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
