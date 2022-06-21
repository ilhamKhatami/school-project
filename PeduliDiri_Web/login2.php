<?php
function alertWindow($msg){
    echo "<script type ='text/JavaScript'>";
    echo "alert('$msg')";
    echo "</script>";}
if (isset($_POST['masuk'])) {
    $nik = $_POST['NIK'];
    $nama = $_POST['nama'];
    if (file_exists($nik.'.txt')) {
        header("location:dashboard.php");
    } else {
        alertWindow("Data yang di isi belum terdaftar");
    }
}
if (isset($_POST['register'])) {
    $nik = $_POST['NIK'];
    $nama = $_POST['nama'];
    if (file_exists($nik.'.txt')) {
        alertWindow("Data yang di isi sudah terdaftar");
    } else {
        $anu = fopen("$nik.txt", "w");
        fwrite($anu, $nama);
        fclose($anu);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="NIK">NIK</label>
        <input type="text" name="NIK">
        <label for="nama">Nama</label>
        <input type="text" name="nama">
        <input type="submit" name="masuk" value="Masuk">
        <input type="submit" name="register" value="Register">
    </form>
    
</body>

</html>