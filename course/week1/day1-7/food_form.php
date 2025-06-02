<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makanan</title>
</head>
<body>
    <form action="/food_result.php" method="POST">
        <label>Pilih makanan favoritmu:</label><br>
        <input type="checkbox" name="foods[]" value="Sate"> Sate<br>
        <input type="checkbox" name="foods[]" value="Es Krim"> Es Krim<br>
        <input type="checkbox" name="foods[]" value="Apem"> Apem<br>
        <input type="checkbox" name="foods[]" value="Rinso"> Rinso<br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>