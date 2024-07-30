<?php

    echo "<div class='content-game'>";
    echo "  <form action='../../php/submit_game.php' method='post' enctype='multipart/form-data'>";
    echo "      <label for='judul'>Judul/Nama Karya</label>";
    echo "      <input type='text' id='judul' name='judul' placeholder='Judul/Nama Karya' required>";     
    echo "      <label for='gdd'>Game Design Document (pdf)</label>";
    echo "      <input type='url' id='gdd' name='gdd' placeholder='Game Design Document (pdf)' required>";     
    echo "      <label for='file_executable'>File Executable (rar/zip)</label>";
    echo "      <input type='url' id='file_executable' name='file_executable' placeholder='Masukkan Link File Executable (GDrive)' required>";
    echo "      <label for='trailer_gameplay'>Trailer Gameplay (mp4)</label>";
    echo "      <input type='url' id='trailer_gameplay' name='trailer_gameplay' placeholder='Masukkan Link Trailer Gameplay (GDrive)' required>";
    echo "      <label for='source_code'>Source Code (rar/zip)</label>";
    echo "      <input type='url' id='source_code' name='source_code' placeholder='Masukkan Link Source Code (GDrive)' required>";     
    echo "      <label for='deskripsi'>Deskripsi Project</label>";
    echo "      <textarea id='deskripsi' name='deskripsi' placeholder='Deskripsi Project' rows='4' required></textarea>";    
    echo "      <button type='submit'>KIRIM</button>";
    echo "  </form>";
    echo "</div>";
?>