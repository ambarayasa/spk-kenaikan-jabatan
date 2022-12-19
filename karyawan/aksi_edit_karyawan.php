<?php
$id_karyawan=$_POST['id_karyawan'];
$nip =$_POST['nip'];
$nama_karyawan =$_POST['nama_karyawan'];
$umur =$_POST['umur'];
include "../koneksi.php";
$sql="update tb_karyawan set nip = '$nip',
    nama_karyawan='$nama_karyawan',
    umur='$umur' where id_karyawan='$id_karyawan'";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if ($hasil) {
    header("location:../index.php?halaman=1&pesan=edit_sukses");
}else
{
    header("location:../index.php?halaman=1&pesan=edit_gagal");
}
?>