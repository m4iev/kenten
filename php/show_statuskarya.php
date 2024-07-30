<?php 

    session_start();

    $conn = new mysqli("localhost", "admin", "inovasipalembang2024", "sinopal");

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $header_sudah_kumpul = "Bagus!";
    $header_belum_kumpul = "Upload Karya Mu Sekarang Juga!";
    $header_tidak_ada_data = "Belum Mengukuti Lomba";

    $img_sudah_kumpul = "<img src='../../assets/correct.png'>";
    $img_belum_kumpul = "<img src='../../assets/upload.png'>";
    $img_tidak_ada_data = "<img src='../../assets/wrong.png'>";

    $deskripsi_sudah_kumpul = "Anda telah mengirim karya tim Anda! Karya Anda sedang dinilai oleh assesor, tunggu dan terus cek status karya Anda!";
    $deskripsi_belum_kumpul = "Karya Tim Anda akan dinilai dengan assessor yang mempunyai pengalaman dibidangnya. Penilaian ini tidak mendiskriminasi ras dan agama atau mementingkan golongan tertentu!";
    $deskripsi_tidak_ada_data = "Anda belum mengikuti lomba apapun. Silahkan isi data tim terlebih dahulu.";


    $emailKetua = $_SESSION['user_email'];
    $sql = "SELECT * FROM data_tim WHERE email='$emailKetua'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Cek lomba apa
        $lomba_diikuti = $row['lomba_diikuti'];
        $nama_tim = $row['nama_tim'];

        $sql_status_peserta = "SELECT status_peserta from peserta_$lomba_diikuti WHERE nama_tim='$nama_tim'";
        $result_status_peserta = $conn->query($sql_status_peserta);
        $row_status_peserta = $result_status_peserta->fetch_assoc();

        $status_peserta = $row_status_peserta['status_peserta'];

        if ($status_peserta === "belum mengumpul") {
            $header_user = $header_belum_kumpul;
            $img_user = $img_belum_kumpul;
            $deskripsi_user = $deskripsi_belum_kumpul;
        } else {
            $header_user = $header_sudah_kumpul;
            $img_user = $img_sudah_kumpul;
            $deskripsi_user = $deskripsi_sudah_kumpul;
        }

    } else {
        $header_user = $header_tidak_ada_data;
        $img_user = $img_tidak_ada_data;
        $deskripsi_user = $deskripsi_tidak_ada_data;
    }

    echo "<div class='status-karya'>";
    echo "  <a href='./dashboard_peserta.php' class='back-link'></ion-icon>Kembali</a>";
    echo "  <h1>$header_user</h1>";
    echo "  <div class='upload-icon'>";
    echo "      $img_user";
    echo "  </div>";
    echo "<p class='description'>$deskripsi_user</p>";
    echo "</div>";

    $conn->close();
?>
