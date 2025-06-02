<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transportasi</title>
</head>
<body>
    <form action="transport_result.php" method="POST">
        <p>Pilihan transportasi utamamu:</p>
        <input type="radio" name="main_transport" value="Mobil"> Mobil<br>
        <input type="radio" name="main_transport" value="Bis"> Bis<br>
        <input type="radio" name="main_transport" value="Kereta"> Kereta<br>
        <input type="radio" name="main_transport" value="Ferrari SF25"> Ferrari SF25<br>

        <p>Opsi transportasi lain:</p>
        <input type="checkbox" name="other_transport[]" value="Mobil"> Mobil<br>
        <input type="checkbox" name="other_transport[]" value="Bis"> Bis<br>
        <input type="checkbox" name="other_transport[]" value="Kereta"> Kereta<br>
        <input type="checkbox" name="other_transport[]" value="Ferrari SF25"> Ferrari SF25<br>
    
        <input type="submit" value="Submit">
    </form>
</body>
</html>