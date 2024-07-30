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
    $file_executable = $_POST['file_executable'];
    $trailer_gameplay = $_POST['trailer_gameplay'];
    $source_code = $_POST['source_code'];
    $deskripsi = $_POST['deskripsi'];

    $sql_update_data = "UPDATE peserta_game SET judul_game=\"$judul\", file_executable=\"$file_executable\", trailer_gameplay=\"$trailer_gameplay\", source_code=\"$source_code\", deskripsi=\"$deskripsi\", status_peserta=\"sudah mengumpul\" WHERE nama_tim=\"$nama_tim\"";

    if ($conn->query($sql_update_data) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error";
    }
}
?>