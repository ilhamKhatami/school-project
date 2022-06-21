<?php
session_start();
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
    <section class="d-flex flex-column justify-content-between" id="hero">
        <div id="hero-top">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#">PEDULI DIRI</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1" style="font-family: Montserrat, sans-serif;">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link active pulse animated" href="#">DASHBOARD</a></li>
                            <li class="nav-item"><a class="nav-link" href="catatan.php">CATATAN PERJALANAN</a></li>
                            <li class="nav-item"><a class="nav-link" href="isidata.php">ISI DATA PERJALANAN</a></li>
                            <li class="nav-item"></li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link active" href="logout.php">LOG OUT</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 id="title">Selamat datang di website PEDULI DIRI</h1>
            <h2 class="display-6" id="subtitle">Catat perjalanan anda disini!</h2>
        </div>
        <div id="hero-bottom" style="height: 92.5px;">
            <div class="container">
                <div class="row">
                    <div class="col offset-xl-8"><a class="btn btn-primary btn-lg" role="button" id="btn" style="background: rgba(0,0,0,0);color: rgb(0,0,0);font-family: Montserrat, sans-serif;font-size: 25px;font-weight: bold;border-radius: 25px;border: 1px outset rgb(0,0,0) ;" href="isidata.php">Isi Data Perjalanan</a></div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</body>

</html>