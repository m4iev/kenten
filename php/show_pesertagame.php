<?php

$db = new mysqli('localhost', 'admin', 'inovasipalembang2024', 'akronim');

if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

$sql = "SELECT * FROM peserta_game";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nama Tim</th>";
    echo "<th>Judul Game</th>";
    echo "<th>File Executable</th>";
    echo "<th>Trailer Gameplay</th>";
    echo "<th>Source Code</th>";
    echo "<th>Deskripsi</th>";
    echo "<th>Status Peserta</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        $file_executable = $row['file_executable'];
        $trailer_gameplay = $row['trailer_gameplay'];
        $source_code = $row['source_code'];

        $hyperlink_file_executable = is_null($row['file_executable']) ? "Belum ada" : "<a href='$file_executable'>Link</a>";
        $hyperlink_trailer_gameplay = is_null($row['trailer_gameplay']) ? "Belum ada" : "<a href='$trailer_gameplay'>Link</a>";
        $hyperlink_source_code = is_null($row['source_code']) ? "Belum ada" : "<a href='$source_code'>Link</a>";

        echo "<tr>";
        echo "<td>" . ucwords($row['nama_tim']) . "</td>"; 
        echo "<td>" . ucwords($row['judul_game']) . "</td>";
        echo "<td>$hyperlink_file_executable</td>";
        echo "<td>$hyperlink_trailer_gameplay</td>";
        echo "<td>$hyperlink_source_code</td>";
        echo "<td>" . $row['deskripsi'] . "</td>";
        echo "<td>" . ucwords($row['status_peserta']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nama Tim</th>";
    echo "<th>Judul Game</th>";
    echo "<th>File Executable</th>";
    echo "<th>Trailer Gameplay</th>";
    echo "<th>Source Code</th>";
    echo "<th>Deskripsi</th>";
    echo "<th>Status Peserta</th>";
    echo "</tr>";
    echo "</table>";
}
$db->close();

?>