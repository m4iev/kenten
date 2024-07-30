<?php

session_start();

$conn = new mysqli("1ld.h.filess.io", "komikbang_nearertown", "2ee4b70d5fa690b6a847c0d57cad5577cc4403bc", "komikbang_nearertown");
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
        VALUES ('$email_ketua', '$nama_tim', '$nama_ketua', '$nik_ketua', '$no_telp_ketua', '$lomba_diikuti')";

$sql_peserta = "INSERT INTO peserta_$lomba_diikuti (nama_tim, status_peserta)
                VALUES ('$nama_tim', 'belum mengumpul')";

// Eksekusi query
if ($conn->query($sql) === TRUE && $conn->query($sql_peserta) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
