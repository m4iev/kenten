<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../../styles/styledashboard.css">
</head>

<body>
    <div class="container">

        <!-- Sidebar -->
        <div class="navigation">
            <ul>
                <li id="home-admin">
                    <a href="../dashboard_admin.php">
                        <span class="icon">
                            <ion-icon name="accessibility-outline"></ion-icon>
                        </span>
                        <span class="title">Akronim</span>
                    </a>
                </li>

                <li id="kegiatan-lomba-admin">
                    <a href="../admin_kegiatanlomba.php">
                        <span class="icon">
                            <ion-icon name="medal-outline"></ion-icon>
                        </span>
                        <span class="title">Kegiatan Lomba</span>
                    </a>
                </li>

                <li id="data-tim-admin">
                    <a href="../admin_datatim.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Data Tim Peserta</span>
                    </a>
                </li>

                <li id="ganti-sandi-admin">
                    <a href="../admin_gantisandi.html">
                        <span class="icon">
                            <ion-icon name="key-outline"></ion-icon>
                        </span>
                        <span class="title">Ganti Kata Sandi</span>
                    </a>
                </li>

                <li>
                    <a href="../../login.html" onclick="return confirm('Apakah kamu yakin ingin keluar?')">
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

                <div class="user">
                    <img src="../../../assets/iky.png" alt="">
                </div>
            </div>

            <div class="container_form">
                <a href="../admin_kegiatanlomba.php" class="back-link"></ion-icon>Kembali</a>
                <div class="header_form">
                    <h1>Lomba Animasi</h1>
                </div>
            </div>

            <div class="detail-container">
                <div class="section-detail">
                    <div class="section-header">Deskripsi Lomba</div>
                    <div class="section-content">
                        <p>Tunjukkan bakatmu dalam animasi dan ciptakan karya terbaikmu! Ikuti lomba animasi yang
                            diadakan dari tanggal 1 Agustus 2024 - 31 Agustus 2024. Lomba ini terbuka untuk semua
                            kalangan dan kamu bisa bebas berkreasi dengan tema inovasi Kota Palembang. Hadiah menarik
                            menanti para pemenang! Segera daftarkan dirimu di portal lomba inovasi dan tunjukkan
                            kemampuanmu dalam animasi!</p>
                    </div>
                </div>
                <div class="section-detail">
                    <div class="section-header">Kriteria Lomba</div>
                    <div class="section-content">
                        <ol>
                            <li>Peserta terbuka untuk masyarakat umum, praktisi desain dan multimedia, serta
                                mahasiswa/wi perguruan tinggi.</li>
                            <li>Peserta merupakan warga Kota Palembang (dibuktikan dengan KTP) dan atau mahasiswa di
                                Universitas/Perguruan Tinggi di Kota Palembang yang dinyatakan dengan Kartu Mahasiswa.
                            </li>
                            <li>Pendaftaran gratis/tidak dipungut biaya.</li>
                            <li>Durasi maksimal 5 menit.</li>
                            <li>Pengumpulan menggunakan format mp4.</li>
                            <li>Resolusi minimal 720p</li>
                            <li>Karya harus original dan belum pernah diikutsertakan dalam lomba lain.</li>
                            <li>Peserta tetap memegang hak cipta, namun panitia berhak menggunakan karya untuk keperluan
                                promosi</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="header_form">
                    <h1>Peserta</h1>
            </div>

            <div class="tabel">
                <?php include '../../../php/show_pesertaanimasi.php' ?>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../../../js/script.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>