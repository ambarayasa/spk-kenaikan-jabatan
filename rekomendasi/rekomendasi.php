<div class="container my-4">
    <h1>Rekomendasi Karyawan</h1>
    <?php
include "koneksi.php";
$sql="select * from tb_penilaian where nilai IS NULL";
$hasil=mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
if (!$hasil || mysqli_num_rows($hasil)>0) {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Pesan : </strong> Rekomendasi Perlu diperbarui.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <a href="rekomendasi/aksi_rekomendasi.php"><input style="margin-bottom:5px " class="btn btn-primary" type="button"
            name="" value="Mulai Perbarui"></a>
    <?php
}else{
 ?>
    <a href="rekomendasi/aksi_rekomendasi.php"><input style="margin-bottom:5px " class="btn btn-primary" type="button"
            name="" value="Perbarui"></a>
    <?php
}
$sql="select `db_spk_karyawan`.`tb_karyawan`.`id_karyawan` AS `id_karyawan`,`db_spk_karyawan`.`tb_karyawan`.`nama_karyawan` AS `nama_karyawan`,`db_spk_karyawan`.`tb_penilaian`.`id_penilaian` AS `id_penilaian`,`db_spk_karyawan`.`tb_penilaian`.`nilai` AS `nilai` from (`db_spk_karyawan`.`tb_karyawan` left join `db_spk_karyawan`.`tb_penilaian` on((`db_spk_karyawan`.`tb_karyawan`.`id_karyawan` = `db_spk_karyawan`.`tb_penilaian`.`karyawan_id`))) order by nilai desc";
$hasil=mysqli_query($koneksi,$sql);
?>
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"> Rekomendasi Kenaikan Jabatan Karyawan</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr style="font-weight: bold">
                        <td width="5%">No.</td>
                        <td width="45%">Nama Karyawan</td>
                        <td width="50%">Nilai</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
   $no=1;
   $i=0;
   while ($row=mysqli_fetch_array($hasil)) { 
   ?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $row['nama_karyawan']?></td>
                        <form action="rekomendasi/aksi_rekomendasi.php" method="POST">
                            <td>
                                <?php echo $row['nilai']?>
                            </td>
                    </tr>
                    <?php
   $i++;
   }
   ?>

                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>