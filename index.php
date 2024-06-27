<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Auto Usata</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <h2>Inserisci Auto Usata</h2>
        <form action="public/insert_car.php" method="post">
            <label>Marca:</label><br>
            <input type="text" name="brand" required><br>
            <label>Modello:</label><br>
            <input type="text" name="model" required><br>
            <label>Anno:</label><br>
            <input type="number" name="year" required><br>
            <label>Chilometraggio:</label><br>
            <input type="number" name="mileage" required><br>
            <label>Prezzo:</label><br>
            <input type="number" step="0.01" name="price" required><br>
            <label>Tipo di Carburante:</label><br>
            <input type="text" name="fuel_type" required><br>
            <label>Colore:</label><br>
            <input type="text" name="color"><br>
            <label>Numero di Proprietari Precedenti:</label><br>
            <input type="number" name="previous_owners"><br>
            <label>Descrizione:</label><br>
            <textarea name="description"></textarea><br>
            <label>Stato:</label><br>
            <input type="text" name="condition" required><br>
            <input type="submit" value="Inserisci Auto">
        </form>
    </div>
</body>
</html>
