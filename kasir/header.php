<!DOCTYPE html>
<html>
<head>
    <title>Sistem Kasir Penjualan</title>
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">
    <script type="text/javascript" src="../asset/js/jquery.js"></script>
    <script type="text/javascript" src="../asset/js/bootstrap.js"></script>
</head>
<body style="background: #f0f0f0">
    <?php
    session_start();

    if (!isset($_SESSION['user_status'])) {
        header("location:../login.php?pesan=belum_login");
    exit;
    }

    if ($_SESSION['user_status'] != 2) {
        header("location:../admin/index.php?pesan=akses_ditolak");
    exit;
    }
    ?>

    <nav class="navbar navbar-inverse" style="border-radius: 0px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">                    
                    <span class="sr-only"></span>
                </button>
                <a class="navbar-brand" href="index.php"> Kasir </a>
            </div>

            <div class="navbar navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home </a></li>

                    <li><a href="penjualan.php"><i class="glyphicon glyphicon-shopping-cart"></i> Penjualan </a></li>

                    <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><p>Halo, <b><?php echo $_SESSION['username']; ?></b></p></li>
            </div>
        </div>
    </nav>
</body>
</html>