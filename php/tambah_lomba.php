<?php

$conn = new mysqli("localhost", "admin", "inovasipalembang2024", "sinopal");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama_lomba = $_POST['nama-lomba'];
$tanggal_mulai = $_POST['tanggal-mulai'];
$tanggal_berakhir = $_POST['tanggal-berakhir'];
$deskripsi_lomba = $_POST['deskripsi'];

if (empty($nama_lomba) || empty($tanggal_mulai) || empty($tanggal_berakhir)) {
    echo "Semua field harus diisi.";
} else {
    $sql = "INSERT INTO lomba (nama_lomba, tanggal_mulai, tanggal_berakhir, deskripsi)
            VALUES ('$nama_lomba', '$tanggal_mulai', '$tanggal_berakhir', '$deskripsi_lomba')";

    if ($conn->query($sql) === TRUE) {
        echo "Lomba berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
