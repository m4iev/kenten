<?php

$db = new mysqli("1ld.h.filess.io", "komikbang_nearertown", "2ee4b70d5fa690b6a847c0d57cad5577cc4403bc", "komikbang_nearertown");

if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM akun WHERE email = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            
            if ($row['tipe_akun'] == 'peserta') {
                header('Location: ../documents/dashboard_peserta/dashboard_peserta.php');
                exit;
            } else if ($row['tipe_akun'] == 'admin') {
                header('Location: ../documents/dashboard_admin/dashboard_admin.php');
                exit;
            } else {
                echo "<p>Ada masalah dengan akun.</p>";
            }
        } else {
            echo "<p>Password salah!</p>";
        }
    } else {
        echo "<p>Akun tidak ditemukan!</p>";
    }

    $stmt->close();
    $db->close();
}

?>
