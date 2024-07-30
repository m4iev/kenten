<?php

$db = new mysqli("localhost", "admin", "inovasipalembang2024", "sinopal");

if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $tipeAkun = "peserta";

    if ($password != $confirm_password) {
        header("Location: ../documents/register.html");
        echo "<script>alert('Password anda tidak sama.');</script>";
    } else {
        $sql = "INSERT INTO akun (email, password, nama, tipe_akun) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('ssss', $email, $hashedPassword, $nama, $tipeAkun);

        if ($stmt->execute()) {
            header("Location: ../documents/register.html");
        } else {
            header("Location: ../documents/register.html");
        }
    
        $stmt->close();
        $db->close();
    }
}
?>
