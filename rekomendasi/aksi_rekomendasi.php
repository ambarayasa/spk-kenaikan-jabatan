<?php
include "../koneksi.php";
$sql="select max(c1) as max_c1, max(c2) as max_c2, max(c3) as max_c3,max(c4) as max_c4 from tb_penilaian";
$hasil=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($hasil);
$max_c1=$row['max_c1'];
$max_c2=$row['max_c2'];
$max_c3=$row['max_c3'];
$max_c4=$row['max_c4'];


// $sql=" select * from tb_bobot";
// $hasil=mysqli_query( select * from tb_bobot);
// $row=mysqli_fetch_array($hasil);
// $w1=$row['w1'];


$sql=" select * from tb_bobot";
$hasil=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($hasil);
$w1=$row['w1'];
$w2=$row['w2'];
$w3=$row['w3'];
$w4=$row['w4'];

// $sql="select * from tb_penilaian";
// $hasil=mysqli_query(select * from tb_penilaian");
// $i=0;

$sql="select * from tb_penilaian";
$hasil=mysqli_query($koneksi,$sql);
$i=0;
while ($row=mysqli_fetch_array($hasil)) {
    $id_penilaian[$i]=$row['id_penilaian'];
    $c1_normalisasi=round(($row['c1']/$max_c1),2);
    $c2_normalisasi=round(($row['c2']/$max_c2),2);
    $c3_normalisasi=round(($row['c3']/$max_c3),2);
    $c4_normalisasi=round(($row['c4']/$max_c4),2);

    $nilai[$i]=round((($w1*$c1_normalisasi)+($w2*$c2_normalisasi)+($w3*$c3_normalisasi)+($w4*$c4_normalisasi)),2);
    $i++;
}

$x=0;

foreach ($nilai as $key => $value) {
    $sql="update tb_penilaian set nilai='$value' where id_penilaian='$id_penilaian[$x]'";
    mysqli_query($koneksi,$sql);
    $x++;
    echo "$sql";
    echo "<br>";
}
header("location:../index.php?halaman=rekomendasi");
?>