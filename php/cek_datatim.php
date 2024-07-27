<?php

session_start();

$conn = new mysqli("localhost", "admin", "inovasipalembang2024", "akronim");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$emailKetua = $_SESSION['user_email'];
$sql = "SELECT * FROM data_tim WHERE email='$emailKetua'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<table>";
    echo "<tr>";
    echo "<th>Nama Tim</th>";
    echo "<th>Nama Ketua</th>";
    echo "<th>Nik Ketua</th>";
    echo "<th>No. Telp Ketua</th>";
    echo "<th>Lomba yang diikuti</th>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>" . ucwords($row['nama_tim']) . "</td>";
    echo "<td>" . ucwords($row['nama_ketua']) . "</td>";
    echo "<td>" . $row['nik_ketua'] . "</td>";
    echo "<td>" . $row['no_telp_ketua'] . "</td>";
    echo "<td>" . ucwords($row['lomba_diikuti']) . "</td>";
    echo "</tr>";

    echo "</table>";
} else {
    include '../../php/form_datatim.php';
}

$conn->close();
?>
