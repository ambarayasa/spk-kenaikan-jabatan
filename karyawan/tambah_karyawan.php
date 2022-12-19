<div class="container my-4">
    <h1>Tambah Karyawan</h1>
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
        </div>
        <div class="card-body">
            <div class="my-4">
                <form action="karyawan/aksi_tambah_karyawan.php" method="POST">
                    <div class="form-group row">
                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="nip" pattern="[0-9]+" maxlength="12"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_karyawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_karyawan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="umur" pattern="[0-9]+" max="100" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="button" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="index.php?halaman=data">
                                <input type="" class="btn btn-primary" value="Kembali">
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>