<?php
function alertWindow($msg){
    echo "<script type ='text/JavaScript'>";
    echo "alert('$msg')";
    echo "</script>";
}
function masuk()
{
    if (isset($_POST['masuk'])) {
        $nik = $_POST['NIK'];
        $nama = $_POST['nama'];
        if (file_exists("user/" . $nik . ".txt")) {
            $data = file("user/" . $nik . ".txt", FILE_IGNORE_NEW_LINES);
            foreach ($data as $value) {
                $pecah = $value;
                if ($pecah == $nama) {
                    $_SESSION['nama'] = $nama;
                    $_SESSION['NIK'] = $nik;
                    header("location:dashboard.php");
                } else {
                    alertWindow("Nama yang di isi salah");
                    break;
                }
            }
        } else {
            alertWindow("Data yang di isi belum terdaftar");
        }
    }
}
function register()
{
    if (isset($_POST['register'])) {
        $nik = $_POST['NIK'];
        $nama = $_POST['nama'];
        if (file_exists("user/" . $nik . ".txt")) {
            alertWindow("Maaf NIK yang anda masukan sudah terdaftar");
        } else {
            $anu = fopen("user/" . $nik . ".txt", "w");
            fwrite($anu, $nama);
            fclose($anu);
        }
    }
}
function isidata()
{
    if (isset($_POST['simpan'])) {
        $nik = $_SESSION['NIK'];
        $nama = $_SESSION['nama'];
        $tanggal = $_POST['tanggal'];
        $waktu = $_POST['waktu'];
        $suhu = $_POST['suhu'];
        $lokasi = $_POST['lokasi'];
        $format = "\n$nik|$nama|$tanggal|$waktu|$lokasi|$suhu";
        $file = fopen("catatan.txt", 'a');
        fwrite($file, $format);
        fclose($file);
    }
}
function catatan()
{
    $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
    $user = $_SESSION['NIK'] . "|" . $_SESSION['nama'];
    foreach ($data as $value) {
        $pecah = explode("|", $value);
        @$key = $pecah['0'] . "|" . $pecah['1'];
        if ($key == $user) {
            echo "<tr>";
            echo "<td>".$pecah['2']."</td>";
            echo "<td>".$pecah['3']."</td>";
            echo "<td>".$pecah['4']."</td>";
            echo "<td>".$pecah['5']."</td>";
            echo "</tr> ";
        }
    }
}
?>