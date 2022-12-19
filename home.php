<?php
include "koneksi.php";
$sql="SELECT count(*) as total from tb_karyawan";
$hasil=mysqli_query($koneksi,$sql);
$data=mysqli_fetch_array($hasil);

$slq2="select * from tb_karyawan";
$hasil=mysqli_query($koneksi,$slq2);
?>

<div class="container my-3">
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Data Karyawan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php echo $data['total'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"> SPK Kenaikan Jabatan</h6>
        </div>
        <div class="card-body">
            Selamat datang di SPK Kenaikan Jabatan - Sistem pendukung keputusan yang berfungsi untuk membantu perusahaan
            khususnya HRD dalam proses penentuan promosi kenaikan jabatan karyawan. Kami memiliki visi untuk Membantu
            perusahaan untuk pengambilan keputusan dalam menentukan karyawan yang cocok untuk kenaikan jabatan sesuai
            dengan kriteria yang dibutuhkan perusahaan. Fitur aplikasi kami berupa Manajemen Data Karyawan
        </div>
    </div>

    <div class="card shadow mt-3">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"> List Karyawan </h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr style="font-weight: bold">
                        <td width="10px">No.</td>
                        <td>NIP</td>
                        <td>Nama</td>
                        <td>Umur</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
    $no=1;
    while ($row=mysqli_fetch_array($hasil)) {
    ?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $row['nip']?></td>
                        <td><?php echo $row['nama_karyawan']?></td>
                        <td><?php echo $row['umur']?></td>
                    </tr>
                    <?php
}
?>
                </tbody>
            </table>
        </div>
    </div>
</div>