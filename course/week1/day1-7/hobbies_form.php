<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies form</title>
</head>
<body>
    <form action="/hobbies_result.php" method="POST">
        <label>Pilih hobimu: </label><br>
        <input type="checkbox" name="hobbies[]" value="Membaca" > Membaca<br>
        <input type="checkbox" name="hobbies[]" value="Gaming" > Gaming<br>
        <input type="checkbox" name="hobbies[]" value="Memasak" > Memasak<br>
        <input type="checkbox" name="hobbies[]" value="Berpetualang" > Berpetualang<br>       
        <input type="submit" value="submit">
    </form>
</body>
</html>