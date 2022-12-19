<?php
include "koneksi.php";
$slq="SELECT `db_spk_karyawan`.`tb_karyawan`.`id_karyawan` AS `id_karyawan`,`db_spk_karyawan`.`tb_karyawan`.`nama_karyawan` AS `nama_karyawan`,`db_spk_karyawan`.`tb_penilaian`.`c1` AS `c1`,`db_spk_karyawan`.`tb_penilaian`.`c2` AS `c2`,`db_spk_karyawan`.`tb_penilaian`.`c3` AS `c3`,`db_spk_karyawan`.`tb_penilaian`.`c4` AS `c4`,`db_spk_karyawan`.`tb_penilaian`.`id_penilaian` AS `id_penilaian` FROM (`db_spk_karyawan`.`tb_karyawan` LEFT JOIN `db_spk_karyawan`.`tb_penilaian` ON(`db_spk_karyawan`.`tb_karyawan`.`id_karyawan` = `db_spk_karyawan`.`tb_penilaian`.`karyawan_id`))";
$hasil=mysqli_query($koneksi,$slq);
?>
<div class="container my-4">
    <?php
 if (isset($_GET['pesan'])) {
 ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Pesan : </strong> Penilaian berhasil diperbarui.
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
    <?php
 }
 ?>
    <h1>Tabel Penilaian Karyawan</h1>
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"> Penilaian Karyawan </h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered my-4">
                <thead>
                    <tr style="font-weight: bold">
                        <td width="5%">No.</td>
                        <td width="18%">Nama</td>
                        <td width="13%">C1 (Kualitas Kerja)</td>
                        <td width="13%">C2 (Masa Kerja)</td>
                        <td width="13%">C3 (Perilaku)</td>
                        <td width="13%">C4 (Absensi)</td>
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
                        <form action="penilaian/aksi_penilaian.php" method="POST">
                            <td>
                                <input type="hidden" value="<?php echo $row['id_karyawan'] ?>"
                                    name="id_karyawan<?php echo $i;?>">
                                <input type="hidden" value="<?php echo $row['id_penilaian'] ?>"
                                    name="id_penilaian<?php echo $i;?>">
                                <input required="" class="form-control" type="text" value="<?php echo $row['c1']?>"
                                    name="c1<?php echo $i;?>">
                            </td>
                            <td>
                                <input required="" class="form-control" type="text" value="<?php echo $row['c2']?>"
                                    name="c2<?php echo $i;?>">
                            </td>
                            <td>
                                <input required="" class="form-control" type="text" value="<?php echo $row['c3']?>"
                                    name="c3<?php echo $i;?>">
                            </td>
                            <td>
                                <input required="" class="form-control" type="text" value="<?php echo $row['c4']?>"
                                    name="c4<?php echo $i;?>">
                            </td>
                    </tr>
                    <?php
                      $i++;
                      }
                      ?>
                    <tr>
                        <td colspan="6">
                            <input type="hidden" name="jumlah" value="<?php echo $i?>">
                            <input type="submit" value="Simpan" class="btn btn-success btn-block" name="simpan">
                        </td>
                    </tr>
                    </form>
                </tbody>
            </table>
            <h3>Keterangan :</h3>
            <p>1. Pembobotan Kualitas Kerja ( <b>Istimewa</b> : 90% -<= 100% dengan skala nilai 5 dengan bobot 1;<b>
                    Sangat baik</b> :
                    80% -<= 90% dengan skala nilai 4 dengan bobot 0,8; <b>Baik</b> : 65% -<= 80% dengan skala nilai 3
                            dengan bobot 0,6; <b>Perlu Perbaikan</b> : 50% -<= 65% dengan skala nilai 2 dengan bobot
                                0,4; <b>Kurang Baik</b> :
                                < 50% dengan skala nilai 1 dengan bobot 0,2)</p>
                                    <p>2. Pembobotan Masa Kerja ( <b> 5 tahun keatas</b> : bobot nilai 1;<b>5 Tahun</b>
                                        : bobot nilai 0,8; <b>4 Tahun</b> : bobot nilai 0,6;
                                        <b>3 Tahun</b> : bobot nilai 0,4 ; <b>2 Tahun</b> : 0,2)
                                    </p>
                                    <p>3. Pembobotan Perilaku ( <b>Istimewa</b> : 90% -<= 100% dengan skala nilai 5
                                            dengan bobot 1;<b>Sangat baik</b> :
                                            80% -<= 90% dengan skala nilai 4 dengan bobot 0,8; <b>Baik</b> : 65% -<= 80%
                                                    dengan skala nilai 3 dengan bobot 0,6; <b>Perlu Perbaikan</b> : 50%
                                                    -<= 65% dengan skala nilai 2 dengan bobot 0,4; <b>Kurang Baik</b> :
                                                        < 50% dengan skala nilai 1 dengan bobot 0,2)</p>
                                                            <p>4. Pembobotan Absensi ( <b>Istimewa</b> : 90% -<= 100%
                                                                    dengan bobot 1;<b>Sangat baik</b> :
                                                                    80% -<= 90% dengan bobot 0,8; <b>Baik</b> : 75% -<=
                                                                            80% dengan bobot 0,6; <b>Perlu Perbaikan</b>
                                                                            : 60% -<= 75% dengan bobot 0,4; <b>Kurang
                                                                                Baik</b> :
                                                                                < 60% dengan bobot 0,2)</p>
        </div>
    </div>
</div>
</div>