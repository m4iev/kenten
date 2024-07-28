<?php 

echo "<div class='content-animasi'>";
echo "  <form action='submit.php' method='post' enctype='multipart/form-data'>";
echo "      <label for='judul'>Judul/Nama Karya</label>";
echo "      <input type='text' id='judul' name='judul' placeholder='Judul/Nama Karya' required>";
echo "      <label for='storyboard'>Link Storyboard (pdf)</label>";
echo "      <input type='url' id='storyboard' name='storyboard' placeholder='Link Storyboard (pdf)' required>";
echo "      <label for='script'>Link Script (pdf)</label>";
echo "      <input type='file' id='script' name='script' placeholder='Link Script (pdf)' required>";
echo "      <label for='hasil_render'>Link Hasil Render (mp4)</label>";
echo "      <input type='url' id='hasil_render' name='hasil_render' placeholder='Masukkan Link Video Hasil Render' required>";
echo "      <label for='deskripsi'>Deskripsi Project</label>";
echo "      <textarea id='deskripsi' name='deskripsi' placeholder='Deskripsi Project' rows='4' required></textarea>";
echo "      <button type='submit'>KIRIM</button>";
echo "  </form>";
echo "</div>";

?>