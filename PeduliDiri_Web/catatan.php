<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catatan</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap">
    <link rel="stylesheet" href="assets/css/catatan.css">
    <!-- <link rel="stylesheet" href="assets/css/sb-admin-2.min.css"> -->
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="assets/css/Data-Table.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/isidata.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="datatables.min.css"/>
</head>

<body>
    <section class="d-flex flex-column justify-content-between" id="hero">
        <div id="hero-top">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#">PEDULI DIRI</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1" style="font-family: Montserrat, sans-serif;">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link" href="dashboard.php">DASHBOARD</a></li>
                            <li class="nav-item"><a class="nav-link active pulse animated" href="#">CATATAN PERJALANAN</a></li>
                            <li class="nav-item"><a class="nav-link" href="isidata.php">ISI DATA PERJALANAN</a></li>
                            <li class="nav-item"></li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link active" href="logout.php">LOG OUT</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h2 class="display-6" id="subtitle">Catatan perjalanan anda</h2>
        </div>
        <div data-aos="zoom-in-up" data-aos-duration="750" data-aos-delay="150" id="hero-content">
            <div class="container text-end d-table" id="container-table">
                <div class="row" id="rowatas">
                    <div class="col-xl-10 offset-xl-1">
                        <h1 id="headingnama"><?= $_SESSION['nama']; ?></h1>
                    </div>
                </div>
                <div class="row" id="rowbawah">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="table-responsive">
                            <table class="table table-bordered" class="display" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Suhu Tubuh</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Suhu Tubuh</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                                    $user = $_SESSION['NIK'] . "|" . $_SESSION['nama'];
                                    foreach ($data as $value) {
                                        $pecah = explode("|", $value);
                                        @$key = $pecah['0'] . "|" . $pecah['1'];
                                        if ($key == $user) {
                                    ?>
                                            <tr>
                                                <td><?= $pecah['2']; ?></td>
                                                <td><?= $pecah['3']; ?></td>
                                                <td><?= $pecah['4']; ?></td>
                                                <td><?= $pecah['5']; ?></td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hero-bottom" style="height: 92.5px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 offset-xl-8"><a class="btn btn-primary btn-lg" role="button" id="btn" style="background: rgba(245,245,245,0.21);color: rgb(0,0,0);font-family: Montserrat, sans-serif;font-size: 25px;font-weight: bold;border-radius: 31px;border-width: 0px;border-color: rgb(0,0,0);opacity: 0.93;filter: contrast(103%);" href="isidata.php">Isi Data Perjalanan</a></div>
                    </div>
                </div>
            </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script type="text/javascript" src="datatables.min.js"></script>
    <script type="text/javascript">
        let table = new DataTable('#dataTable');
    </script>
</body>

</html>