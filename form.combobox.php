<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form input combobox</title>
</head>
<body>
    <p>binatang apa yang anda suka</p>
    <form id="form.combobox.php" name="form.combobox.php" method="POST"
    action="Proses_combobox.php">
        <select name="favorit">
            <option value="kucing">kucing</option>
            <option value="anjing">anjing</option>
            <option value="burung">burung</option>
            <option value="sapi">sapi</option>
            <option value="kambing">kambing</option>
        </select>
        <p></p>
        <p><input type="submit" name="button" value="Tampil"></p>
    </form>
</body>
</html>