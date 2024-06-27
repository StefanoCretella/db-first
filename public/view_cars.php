<?php
include '../config/db_config.php';

$sql = "SELECT * FROM used_cars";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Auto Usate in Vendita</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modello</th>
                <th>Anno</th>
                <th>Chilometraggio</th>
                <th>Prezzo</th>
                <th>Tipo di Carburante</th>
                <th>Colore</th>
                <th>Proprietari Precedenti</th>
                <th>Descrizione</th>
                <th>Stato</th>
                <th>Data Inserimento</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["brand"]. "</td>
                <td>" . $row["model"]. "</td>
                <td>" . $row["year"]. "</td>
                <td>" . $row["mileage"]. "</td>
                <td>" . $row["price"]. "</td>
                <td>" . $row["fuel_type"]. "</td>
                <td>" . $row["color"]. "</td>
                <td>" . $row["previous_owners"]. "</td>
                <td>" . $row["description"]. "</td>
                <td>" . $row["condition"]. "</td>
                <td>" . $row["listing_date"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
