<?php
include '../config/db_config.php';

// SQL per creare la tabella
$sql = "CREATE TABLE IF NOT EXISTS used_cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    mileage INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    fuel_type VARCHAR(20) NOT NULL,
    color VARCHAR(30),
    previous_owners INT,
    description TEXT,
    condition VARCHAR(20) NOT NULL,
    listing_date DATE NOT NULL DEFAULT CURRENT_DATE
)";

if ($conn->query($sql) === TRUE) {
    echo "Table used_cars created successfully\n";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
