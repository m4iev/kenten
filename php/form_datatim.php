<?php
    
    echo "<form action='../../php/data_tim.php' method='post' enctype='multipart/form-data'>";
    echo "  <label for='nama_tim'>Nama Tim</label>";
    echo "  <input type='text' id='nama_tim' name='nama_tim' placeholder='Nama Tim' required>";
    echo "  <label for='nama_ketua'>Nama Ketua Tim</label>";
    echo "  <input type='text' id='nama_ketua' name='nama_ketua' placeholder='Nama Ketua Tim' required>";
    echo "  <label for='nik_ketua'>NIK Ketua Tim</label>";
    echo "  <input type='text' id='nik_ketua' name='nik_ketua' placeholder='Nik Ketua Tim' required>";
    echo "  <label for='no_telp_ketua'>No.Telp Ketua Tim</label>";
    echo "  <input type='tel' id='no_telp_ketua' name='no_telp_ketua' placeholder='No.Telp Ketua Tim' required>";
    echo "  <div class='dropdown'>";
    echo "      <label for='lomba_diikuti'>Lomba Yang Diikuti</label>";
    echo "      <select id='lomba_diikuti' name='lomba' required>";
    include "../../php/pilih_lomba.php";
    echo "      </select>";
    echo "  </div>";        
    echo "  <button type='submit' onclick='return confirm(\"Setelah disimpan, data tidak bisa diubah. Silahkan dicek kembali.\")'>SIMPAN</button>";
    echo "</form>";
?>