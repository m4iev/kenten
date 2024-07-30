<?php

$db = new mysqli("localhost", "admin", "inovasipalembang2024", "sinopal");

if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

$sql = "SELECT * FROM peserta_animasi";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nama Tim</th>";
    echo "<th>Judul Animasi</th>";
    echo "<th>Storyboard</th>";
    echo "<th>Script</th>";
    echo "<th>Hasil Render</th>";
    echo "<th>Deskripsi</th>";
    echo "<th>Status Peserta</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        $storyboard = $row['storyboard'];
        $script = $row['script'];
        $hasil_render = $row['hasil_render'];

        $hyperlink_storyboard = is_null($row['storyboard']) ? "Belum ada" : "<a href='$storyboard'>Link</a>";
        $hyperlink_script = is_null($row['script']) ? "Belum ada" : "<a href='$script'>Link</a>";
        $hyperlink_hasil_render = is_null($row['hasil_render']) ? "Belum ada" : "<a href='$hasil_render'>Link</a>";

        echo "<tr>";
        echo "<td>" . ucwords($row['nama_tim']) . "</td>"; 
        echo "<td>" . ucwords($row['judul_animasi']) . "</td>";
        echo "<td>$hyperlink_storyboard</td>";
        echo "<td>$hyperlink_script</td>";
        echo "<td>$hyperlink_hasil_render</td>";
        echo "<td>" . $row['deskripsi'] . "</td>";
        echo "<td>" . ucwords($row['status_peserta']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nama Tim</th>";
    echo "<th>Judul Animasi</th>";
    echo "<th>Storyboard</th>";
    echo "<th>Script</th>";
    echo "<th>Hasil Render</th>";
    echo "<th>Deskripsi</th>";
    echo "<th>Status Peserta</th>";
    echo "</tr>";
    echo "</table>";
}
$db->close();

?>
