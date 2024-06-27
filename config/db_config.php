<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_dealership";

// Crea la connessione
$conn = new mysqli($servername, $username, $password);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Crea il database se non esiste
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

// Connessione al database specificato
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
