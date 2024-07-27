<?php

session_start();

$conn = new mysqli("localhost", "admin", "inovasipalembang2024", "akronim");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$email_ketua = $_SESSION['user_email'];
$nama_tim = $_POST['nama_tim'];
$nama_ketua = $_POST['nama_ketua'];
$nik_ketua = $_POST['nik_ketua'];
$no_telp_ketua = $_POST['no_telp_ketua'];
$lomba_diikuti = $_POST['lomba'];

// Persiapkan query SQL
$sql = "INSERT INTO data_tim (email, nama_tim, nama_ketua, nik_ketua, no_telp_ketua, lomba_diikuti) 
        VALUES ('$email_ketua' ,'$nama_tim', '$nama_ketua', '$nik_ketua', '$no_telp_ketua', '$lomba_diikuti')";

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
