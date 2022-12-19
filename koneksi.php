<?php
$koneksi=mysqli_connect("localhost","root","","db_spk_karyawan");
mysqli_select_db($koneksi,"db_spk_karyawan") or die("Gagal Terhubung ke database!");
?>