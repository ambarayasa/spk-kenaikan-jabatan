<?php
if (isset($_GET['halaman'])) {
 if ($_GET['halaman']=='home') {
  include "home.php";
 }
 elseif (($_GET['halaman'])?(int)$_GET['halaman'] : 1) {
  include "karyawan/karyawan.php";
 }
 elseif ($_GET['halaman']=='tambah_data') {
  include "karyawan/tambah_karyawan.php";
 }
 elseif ($_GET['halaman']=='edit_data') {
  include "karyawan/edit_karyawan.php";
 }
 elseif ($_GET['halaman']=='penilaian') {
  include "penilaian/penilaian.php";
 }
 elseif ($_GET['halaman']=='tambah_penilaian') {
  include "penilaian/tambah_penilaian.php";
 }
 elseif ($_GET['halaman']=='bobot') {
  include "bobot/bobot.php";
 }
 elseif ($_GET['halaman']=='rekomendasi') {
  include "rekomendasi/rekomendasi.php";
 }
 elseif ($_GET['register']=='register') {
    include "register.php";
   }
 else{
  echo "Halaman tidak ditemukan!";
 }
}else{
 include "home.php";
}
?>