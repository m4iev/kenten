<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../styles/styledashboard.css">
</head>

<body>
    <div class="container">

        <!-- Sidebar -->
        <div class="navigation">
            <ul>
                <li id="home-peserta">
                    <a href="./dashboard_peserta.php">
                        <span class="icon">
                            <ion-icon name="accessibility-outline"></ion-icon>
                        </span>
                        <span class="title">Akronim</span>
                    </a>
                </li>

                <li id="data-tim" class="active">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Data Tim</span>
                    </a>
                </li>

                <li id="kegiatan-lomba">
                    <a href="./peserta_kegiatanlomba.php">
                        <span class="icon">
                            <ion-icon name="medal-outline"></ion-icon>
                        </span>
                        <span class="title">Kegiatan Lomba</span>
                    </a>
                </li>

                <li id="status-karya">
                    <a href="./peserta_statuskarya.html">
                        <span class="icon">
                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Status Karya</span>
                    </a>
                </li>

                <li id="ganti-sandi">
                    <a href="./peserta_gantisandi.html">
                        <span class="icon">
                            <ion-icon name="key-outline"></ion-icon>
                        </span>
                        <span class="title">Ganti Kata Sandi</span>
                    </a>
                </li>

                <li>
                    <a href="../login.html" onclick="return confirm('Apakah kamu yakin ingin keluar?')">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Dashboard -->
        <div class="dashboard">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>

            <div class="submission-data-tim" id="submission-data-tim">
                <div class="container_form">
                    <a href="./dashboard_peserta.php" class="back-link"></ion-icon>Kembali</a>
                    <div class="header_form">
                        <h1>Data Tim</h1>
                    </div>
                    <div class="content">
                        <?php include '../../php/cek_datatim.php' ?>
                    </div>        
                </div>
            </div> 
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../../js/script.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>