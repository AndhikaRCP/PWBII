<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Kenal MDP</title>
</head>
<body>
    <h1>Survey MDP</h1>
    <form action="proses.php" method="post">
        Nama : <input type="text" name="nama" id="nama"> <br>
        Kenal MDP dari : 
        <input type="checkbox" name="dari[]" id="Instagram"> Instagram <br>
        <input type="checkbox" name="dari[]" id="Facebook"> Facebook <br>
        <input type="checkbox" name="dari[]" id="Twitter"> Twitter <br>
        <input type="checkbox" name="dari[]" id="Tiktok"> Tiktok <br>
        <input type="checkbox" name="dari[]" id="Youtube"> Youtube <br>
        <br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>