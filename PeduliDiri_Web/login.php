<?php
include "kode.php";
session_start();
masuk();register();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap">
    <link rel="stylesheet" href="assets/css/catatan.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/isidata.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="login-clean" style="background: url(&quot;assets/img/patrick-tomasso-QMDap1TAu0g-unsplash.jpg&quot;) center / contain repeat-x, url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);">
        <form method="post" style="width: 384px;max-width: 386px;padding-left: 40px;border-radius: 22px;">
            <h1 style="text-align: center;color: rgb(70,181,254);font-family: Adamina, serif;"><strong>MASUK</strong></h1>
            <div class="illustration"><img src="assets/img/user.png" style="width: 122px;"></div>
            <div class="mb-3"><label class="form-label" style="font-family: Adamina, serif;"><strong>NIK :</strong></label><input class="form-control" type="text" name="NIK" style="font-family: Adamina, serif;text-align: left;background: rgb(226,237,254);" required></div>
            <div class="mb-3"><label class="form-label" style="font-family: Adamina, serif;"><strong>Nama :</strong></label><input class="form-control" type="text" name="nama" style="font-family: Adamina, serif;text-align: left;background: rgb(226,237,254);" required></div>
            <div class="d-flex flex-row-reverse mb-3" id="btnmasuk">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"><button class="btn btn-primary d-block w-100" id="btn-submit" type="submit" name="register">REGISTRASI</button></div>
                        <div class="col-md-6"><button class="btn btn-primary d-block w-100" id="btnmasuk1" type="submit" data-bs-target="#myModal" data-bs-toggle="modal" name="masuk">MASUK</button></div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</body>

</html>