<?php
if (isset($_POST['simpan'])) {
 include "../koneksi.php";
 $jumlah=$_POST['jumlah'];
 for ($i=0; $i <$jumlah ; $i++) { 
  $temp_id_karyawan="id_karyawan".$i;
  $temp_id_penilaian="id_penilaian".$i;
  $temp_c1="c1".$i;
  $temp_c2="c2".$i;
  $temp_c3="c3".$i;
  $temp_c4="c4".$i;

  $fix_id_karyawan= $_POST[$temp_id_karyawan];
  $fix_id_penilaian= $_POST[$temp_id_penilaian];
  $fix_c1= $_POST[$temp_c1];
  $fix_c2= $_POST[$temp_c2];
  $fix_c3= $_POST[$temp_c3];
  $fix_c4= $_POST[$temp_c4];

  $sql="select * from tb_penilaian where id_penilaian='$fix_id_penilaian'";
  //echo "$sql";
  $hasil=mysqli_query($koneksi,$sql);
  if (mysqli_num_rows($hasil)<=0) {
   $sql="insert into tb_penilaian(karyawan_id,c1,c2,c3,c4) values('$fix_id_karyawan','$fix_c1','$fix_c2','$fix_c3','$fix_c4')";
   mysqli_query($koneksi,$sql);
   //echo "$sql";
  }else{
   $sql="update tb_penilaian set c1='$fix_c1', c2='$fix_c2', c3='$fix_c3', c4='$fix_c4' where id_penilaian='$fix_id_penilaian'";
   //echo "$sql";
   mysqli_query($koneksi,$sql);
  }
 }
 
}
header("location:../index.php?halaman=penilaian&pesan=1");
?>