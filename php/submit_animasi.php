<?php

session_start();

$conn = new mysqli("localhost", "admin", "inovasipalembang2024", "akronim");

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
    $storyboard = $_POST['storyboard'];
    $script = $_POST['script'];
    $hasil_render = $_POST['hasil_render'];
    $deskripsi = $_POST['deskripsi'];

    $sql_update_data = "UPDATE peserta_animasi SET judul_animasi=\"$judul\", storyboard=\"$storyboard\", script=\"$script\", hasil_render=\"$hasil_render\", deskripsi=\"$deskripsi\", status_peserta=\"sudah mengumpul\" WHERE nama_tim=\"$nama_tim\"";

    if ($conn->query($sql_update_data) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error";
    }
}
?>