<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Admin</title>
    <link rel="stylesheet" href="../../styles/styledashboard.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
    <link rel="manifest" href="../../favicon/site.webmanifest">
</head>

<body>
    <div class="container">

        <!-- Sidebar -->
        <div class="navigation active">
            <ul>
                <li id="home-admin" class="active">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="accessibility-outline"></ion-icon>
                        </span>
                        <span class="title">SINOPAL</span>
                    </a>
                </li>

                <li id="kegiatan-lomba-admin">
                    <a href="./admin_kegiatanlomba.php">
                        <span class="icon">
                            <ion-icon name="medal-outline"></ion-icon>
                        </span>
                        <span class="title">Kegiatan Lomba</span>
                    </a>
                </li>

                <li id="data-tim-admin">
                    <a href="./admin_datatim.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Data Tim Peserta</span>
                    </a>
                </li>

                <li id="ganti-sandi-admin">
                    <a href="./admin_gantisandi.html">
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
        <div class="dashboard active">
            <div class="topbar">
                <div class="toggle home-toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>

            <div class="home" id="home">
                <h2 style="margin-top: 1rem; text-align: center;"><?php include '../../php/show_nama.php' ?></h2>
                <div class="card-container">
                    <div class="card-box">
                        <div class="card-item">
                            <a href="./admin_kegiatanlomba.php" class="card-item-link">
                            <div class="card-item-bg">
                            </div>
                            <div class="card-item-title">
                                Kegiatan Lomba
                            </div>
                            </a>
                        </div>
                        <div class="card-item">
                            <a href="./admin_datatim.php" class="card-item-link">
                            <div class="card-item-bg">
                            </div>
                            <div class="card-item-title">
                                Data Tim Peserta
                            </div>
                            </a>
                        </div>
                        <div class="card-item">
                            <a href="./admin_gantisandi.html" class="card-item-link">
                            <div class="card-item-bg">
                            </div>
                            <div class="card-item-title">
                                Ganti Kata Sandi
                            </div>
                            </a>
                        </div>
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