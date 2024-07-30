<?php

$db = new mysqli("localhost", "admin", "inovasipalembang2024", "sinopal");

if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

$sql = "SELECT nama_lomba, tanggal_mulai, tanggal_berakhir, deskripsi FROM lomba";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nama Lomba</th>";
    echo "<th>Periode Lomba</th>";
    echo "<th></th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . ucwords($row['nama_lomba']) . "</td>";
        echo "<td>" . $row['tanggal_mulai'] . " - " . $row['tanggal_berakhir'] . "</td>";
        echo "<td><a href='./detail_lomba/detail_" . str_replace(' ', '', $row['nama_lomba']) . ".php'><button class='btn-selengkapnya' >Selengkapnya</button></a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data pada tabel lomba";
}

$db->close();

?>
