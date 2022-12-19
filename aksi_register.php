<?php
$nama =$_POST['nama'];
$username =$_POST['username'];
$password =$_POST['password'];
include "koneksi.php";
$sql="insert into tbl_admin (nama, username, password) 
values ('$nama','$username','$password')";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if ($hasil) {
    header("location:login.php?halaman=login&pesan=regis_sukses");
}else
{
    header("location:register.php?halaman=register&pesan=regis_gagal");
}
?>