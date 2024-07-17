<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $recaptcha_response = $_POST['g-recaptcha-response'];

    $secret_key = '6LdOzBEqAAAAABx46CEcXTtF_QEICTxix52V1zrG';

    // Verifikasi reCAPTCHA
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$recaptcha_response");
    $responseKeys = json_decode($response, true);

    if ($responseKeys["success"]) {
        // reCAPTCHA berhasil diverifikasi
        // Lanjutkan dengan pemrosesan pendaftaran pengguna
        echo "Registrasi berhasil.";
    } else {
        // reCAPTCHA gagal diverifikasi
        echo "Verifikasi reCAPTCHA gagal. Silakan coba lagi.";
    }
}
?>
