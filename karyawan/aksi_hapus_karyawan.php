<?php
include "../koneksi.php";
$sql="delete from tb_karyawan where id_karyawan='$_GET[id_karyawan]'";
mysqli_query($koneksi,$sql);
//echo "$sql";
header("location:../index.php?halaman=1");
?>