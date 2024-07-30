<?php

$db = new mysqli("1ld.h.filess.io", "komikbang_nearertown", "2ee4b70d5fa690b6a847c0d57cad5577cc4403bc", "komikbang_nearertown");

if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

$sql = "SELECT * FROM peserta_website";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nama Tim</th>";
    echo "<th>Judul Website</th>";
    echo "<th>Wireframe</th>";
    echo "<th>UI/UX</th>";
    echo "<th>File Project</th>";
    echo "<th>Deskripsi</th>";
    echo "<th>Status Peserta</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        $wireframe = $row['wireframe'];
        $uiux = $row['uiux'];
        $project_file = $row['project_file'];

        $hyperlink_wireframe = is_null($row['wireframe']) ? "Belum ada" : "<a href='$wireframe'>Link</a>";
        $hyperlink_uiux = is_null($row['uiux']) ? "Belum ada" : "<a href='$uiux'>Link</a>";
        $hyperlink_project_file = is_null($row['project_file']) ? "Belum ada" : "<a href='$project_file'>Link</a>";

        echo "<tr>";
        echo "<td>" . ucwords($row['nama_tim']) . "</td>"; 
        echo "<td>" . ucwords($row['judul_website']) . "</td>";
        echo "<td>$hyperlink_wireframe</td>";
        echo "<td>$hyperlink_uiux</td>";
        echo "<td>$hyperlink_project_file</td>";
        echo "<td>" . $row['deskripsi'] . "</td>";
        echo "<td>" . ucwords($row['status_peserta']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nama Tim</th>";
    echo "<th>Judul Website</th>";
    echo "<th>Wireframe</th>";
    echo "<th>UI/UX</th>";
    echo "<th>File Project</th>";
    echo "<th>Deskripsi</th>";
    echo "<th>Status Peserta</th>";
    echo "</tr>";
    echo "</table>";
}
$db->close();

?>
