<?php

session_start();

$conn = new mysqli("localhost", "admin", "inovasipalembang2024", "sinopal");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$email_user = $_SESSION['user_email'];
$sql_datatim = "SELECT * FROM data_tim WHERE email='$email_user'";
$result_datatim = $conn->query($sql_datatim);

if ($result_datatim->num_rows > 0) {
    $row_datatim = $result_datatim->fetch_assoc();
    $lomba_diikuti = $row_datatim['lomba_diikuti'];
    $nama_tim = $row_datatim['nama_tim'];

    $sql_peserta = "SELECT status_peserta FROM peserta_$lomba_diikuti WHERE nama_tim='$nama_tim'";
    $result_peserta = $conn->query($sql_peserta);
    $row_peserta = $result_peserta->fetch_assoc();

    if ($row_peserta['status_peserta'] === 'belum mengumpul') {

        include ("../../php/form_$lomba_diikuti.php");

    } else {
        echo "<div class='deskripsi'>";
        echo "<h2>Anda sudah mengumpulkan karya anda!</h2>";
        echo "</div>";
    }

} else {
    echo "<div class='deskripsi'>";
    echo "<h2>Data Tim anda masih kosong. Silahkan isi terlebih dahulu.</h2>";
    echo "</div>";
}
?>
