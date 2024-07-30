<?php

session_start();

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_SESSION['user_email'];
  $passwordLama = $_POST['password_lama'];
  $passwordBaru = $_POST['password_baru'];
  $konfirmasiPasswordBaru = $_POST['konfirmasi_password_baru'];

  if (empty($passwordLama)) {
    $error .= "Password lama tidak boleh kosong.";
  } else if (empty($passwordBaru)) {
    $error .= "Password baru tidak boleh kosong.";
  } else if (empty($konfirmasiPasswordBaru)) {
    $error .= "Konfirmasi password baru tidak boleh kosong.";
  } else if ($passwordBaru != $konfirmasiPasswordBaru) {
    $error .= "Konfirmasi password baru tidak sesuai dengan password baru.";
  }

  if ($error == "") {
    $db = new mysqli("localhost", "admin", "inovasipalembang2024", "sinopal");

    $sql = "SELECT password FROM akun WHERE email = '$email'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $hashedPasswordLama = $row['password'];
    } else {
      $error .= "Akun tidak ditemukan.";
    }

    if (password_verify($passwordLama, $hashedPasswordLama)) {
      $hashedPasswordBaru = password_hash($passwordBaru, PASSWORD_DEFAULT);
      $sql = "UPDATE akun SET password = '$hashedPasswordBaru' WHERE email = '$email'";
      $db->query($sql);

      echo "<p>Password berhasil diubah!</p>";
    } else {
      $error .= "Password lama salah.";
    }

    $db->close();
  }
}

if ($error != "") {
  echo "<p style='color: red;'>{$error}</p>";
}

?>
