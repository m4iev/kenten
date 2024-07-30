<?php

$db = new mysqli("1ld.h.filess.io", "komikbang_nearertown", "2ee4b70d5fa690b6a847c0d57cad5577cc4403bc", "komikbang_nearertown");

if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

$sql = "SELECT * FROM data_tim";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nama Tim</th>";
    echo "<th>Nama Ketua</th>";
    echo "<th>NIK Ketua</th>";
    echo "<th>No. Telp</th>";
    echo "<th>Lomba yang diikuti</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . ucwords($row['nama_tim']) . "</td>";
        echo "<td>" . ucwords($row['nama_ketua']) . "</td>";
        echo "<td>" . $row['nik_ketua'] . "</td>";
        echo "<td>" . $row['no_telp_ketua'] . "</td>";
        echo "<td>" . ucwords($row['lomba_diikuti']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data pada tabel lomba";
}

$db->close();

?>
