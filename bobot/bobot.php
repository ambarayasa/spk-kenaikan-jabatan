<?php
include "koneksi.php";
$sql="select * from tb_bobot";
$hasil=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($hasil);
?>
<div class="container my-4">
    <?php
 if (isset($_GET['pesan'])) {
 ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Pesan : </strong> Bobot berhasil diperbarui.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
 }
 ?>
    <h3>Ubah Bobot</h3>
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"> Bobot </h6>
        </div>

        <div class="card-body">
            <form action="bobot/aksi_ubah_bobot.php" method="POST">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">W1 (Kualitas Kerja)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="w1" value="<?php echo $row['w1'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">W2 (Masa Kerja)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="w2" value="<?php echo $row['w2'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">W3 (Perilaku)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="w3" value="<?php echo $row['w3'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">W4 (Absensi)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="w4" value="<?php echo $row['w4'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-success btn-block" value="Ubah">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>