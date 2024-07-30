<?php
    echo "<div class='content-website'>";
    echo "  <form action='../../php/submit_website.php' method='post' enctype='multipart/form-data'>";
    echo "      <label for='judul'>Judul/Nama Karya</label>";
    echo "      <input type='text' id='judul' name='judul' placeholder='Judul/Nama Karya' required>";     
    echo "      <label for='wireframe'>Wireframe (link)</label>";
    echo "      <input type='url' id='wireframe' name='wireframe' placeholder='Wireframe (link)' required>";  
    echo "      <label for='uiux'>UI/UX (link)</label>";
    echo "      <input type='url' id='uiux' name='uiux' placeholder='UI/UX (link)' required>"; 
    echo "      <label for='project_file'>Link File Project (dalam format rar/zip)</label>";
    echo "      <input type='url' id='project_file' name='project_file' placeholder='Masukkan Link File Project (GDrive)' required>";
    echo "      <label for='deskripsi'>Deskripsi Project</label>";
    echo "      <textarea id='deskripsi' name='deskripsi' placeholder='Deskripsi Project' rows='4' required></textarea>";
    echo "      <button type='submit'>KIRIM</button>";
    echo "  </form>";
    echo "</div>";
?>