<?php
include '../config/db_config.php';

$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Table: " . $row["Tables_in_car_dealership"] . "\n";
    }
} else {
    echo "No tables found";
}

$conn->close();
?>
