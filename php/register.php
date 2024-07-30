<?php

$db = new mysqli("1ld.h.filess.io", "komikbang_nearertown", "2ee4b70d5fa690b6a847c0d57cad5577cc4403bc", "komikbang_nearertown");

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
            echo "<p>Akun berhasil dibuat!</p>";
        } else {
            echo "<p>Error: " . $db->error . "</p>";
        }
    
        $stmt->close();
        $db->close();
    }
}
?>
