<?php
$nip =$_POST['nip'];
$nama_karyawan =$_POST['nama_karyawan'];
$umur =$_POST['umur'];
include "../koneksi.php";
$sql="insert into tb_karyawan (nip, nama_karyawan, umur) 
values ('$nip','$nama_karyawan','$umur')";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if ($hasil) {
    header("location:../index.php?halaman=1&pesan=tambah_sukses");
}else
{
    header("location:../index.php?halaman=1&pesan=tambah_gagal");
}
?>