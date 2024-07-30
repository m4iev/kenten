<?php

$conn = new mysqli("1ld.h.filess.io", "komikbang_nearertown", "2ee4b70d5fa690b6a847c0d57cad5577cc4403bc", "komikbang_nearertown");

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
