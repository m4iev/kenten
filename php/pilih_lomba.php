<?php

$conn = new mysqli("localhost", "admin", "inovasipalembang2024", "sinopal");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM lomba";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<option value=''>Pilih lomba</option>";
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["nama_lomba"] . "'>" . ucwords($row["nama_lomba"]) . "</option>";
    }
} else {
    echo "<option value=''>Tidak ada data</option>";
}
?>
