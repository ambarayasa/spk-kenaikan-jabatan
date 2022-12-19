<?php
include "koneksi.php";
$sql="select * from tb_karyawan where id_karyawan='$_GET[id_karyawan]'";
$hasil=mysqli_query($koneksi,$sql);
$row=mysqli_fetch_array($hasil);
?>
<div class="col-10">
    <h3>Edit Karyawan</h3>
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
        </div>
        <div class="card-body">
            <form action="karyawan/aksi_edit_karyawan.php" method="POST">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id_karyawan" value="<?php echo $row['id_karyawan'] ?>">
                        <input type="text" class="form-control" name="nip" value="<?php echo $row['nip'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_karyawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_karyawan"
                            value="<?php echo $row['nama_karyawan'] ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="umur" value="<?php echo $row['umur'] ?>"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="button" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>