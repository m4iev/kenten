<?php

session_start();

$conn = new mysqli("localhost", "admin", "inovasipalembang2024", "sinopal");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$emailKetua = $_SESSION['user_email'];
$sql = "SELECT * FROM data_tim WHERE email='$emailKetua'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$nama_tim = $row['nama_tim'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $wireframe = $_POST['wireframe'];
    $uiux = $_POST['uiux'];
    $project_file = $_POST['project_file'];
    $deskripsi = $_POST['deskripsi'];

    $sql_update_data = "UPDATE peserta_website SET judul_website=\"$judul\", wireframe=\"$wireframe\", uiux=\"$uiux\", project_file=\"$project_file\", deskripsi=\"$deskripsi\", status_peserta=\"sudah mengumpul\" WHERE nama_tim=\"$nama_tim\"";

    if ($conn->query($sql_update_data) === TRUE) {
        header("Location: ../documents/dashboard_peserta/peserta_kegiatanlomba.php");
    } else {
        header("Location: ../documents/dashboard_peserta/peserta_kegiatanlomba.php");
    }
}
?>
