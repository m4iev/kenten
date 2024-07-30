TODO

--Frontend--
* Navbar belum maksimal
* Logo pada dashboard belum diganti

--Backend--
* Fix redirect

CHANGELOG 20/7/2024
- Tambah dashboard admin
- Hilangkan field email ketua tim dari form data tim
- Optimisasi sidebar
- Tambah Card pada home dashboard

CHANGELOG 22/7/2024
- Tambah database 'akronim' (sementara)
- Tambah tabel 'lomba'
- Tambah tabel 'akun'
- Tambah isi konten Kegiatan lomba pada dashboard admin
- Fitur Login dan Register sudah berfungsi
- Tombol keluar pada dashboard sudah berfungsi
- Ucapan selamat datang sudah diatur sesuai akun yang login

CHANGELOG 23/7/2024
- Fitur ganti sandi sudah berjalan
- Tambah Skeleton Homepage
- Tambah kerangka status karya

CHANGELOG 24/7/2024
- Tambah fitur tambah lomba
- Fix navbar homepage

CHANGELOG 25/7/2024
- Fitur Tambah lomba sudah berjalan
- Ubah peserta_datatim.html ke peserta_datatim.php
- Ubah hyperlink di berbagai page dari peserta_datatim.html ke peserta_datatim.php
- text field 'lomba yang diikuti pada bagian datatim - peserta diganti ke dropdown select'
- Tambah tombol kembali pada page status karya - peserta
- Buat tabel 'data_tim'
- Tambah konten page data tim peserta - admin dan disambungkan dengan kode php untuk menampilkan tabel berdasarkan isi dari database

CHANGELOG 26/7/2024
- Tambah konten detail lomba website, animasi, pengembangan game dan fotografi

CHANGELOG 27/7/2024
- Optimisasi data tim peserta
- Ubah konten data tim peserta dengan mengecek apakah data sudah ada di database. jika sudah ada, tampilkan data dalam bentuk tabel. jika tidak ada, tampilkan form
- Tambah tabel peserta_website, peserta_animasi dan peserta_game

CHANGELOG 28/7/2024
- Ubah posisi label ke tengah
- Apply background image motif songket
- Tambah konten kegiatan lomba peserta berdasarkan data yang ada pada database
- Tambah tabel data peserta pada tiap page detail lomba

CHANGELOG 29/7/2024
- Tambah media queries untuk smartphone dan tablet pada dashboard peserta dan dashboard admin.

CHANGELOG 30/7/2024
- Tambah asset status karya
- Page status karya menyesuaikan data pada database
- Tambah kode php untuk handle submisi lomba
- Tambah fitur sidebar pada max-width 480px
- Ubah link "Akronim" jadi "SINOPAL" pada dashboard peserta dan admin
