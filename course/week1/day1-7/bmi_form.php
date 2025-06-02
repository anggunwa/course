<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="/bmi_result.php" method="POST">
        <label>Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <label>Berat Badan (kg): </label>
        <input type="number" name="berat" required><br>
        <label>Tinggi Badan (cm): </label>
        <input type="number" name="tinggi" required>
        <button value="Menghitung BMI">Submit</button>
    </form>

</body>
</html>