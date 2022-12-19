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
    <h1>Manajemen Karyawan</h1>
    <div class="card">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"> Data Karyawan </h6>
        </div>
        <div class="card-body">
            <a href="index.php?halaman=tambah_data">
                <input type="button" class="btn btn-primary btn-sm" value="Tambah Karyawan" name=""
                    style="margin-bottom:10px ">
            </a>
            <table class="table table-bordered">
                <thead>
                    <tr style="font-weight: bold">
                        <td width="10px">No.</td>
                        <td>NIP</td>
                        <td>Nama</td>
                        <td>Umur</td>
                        <td width="135px">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $batas = 5;
                    $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
                
                    $previous = $halaman - 1;
                    $next = $halaman + 1;
                    
                    $data = mysqli_query($koneksi,"select * from tb_karyawan");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);
                
                    $data_pegawai = mysqli_query($koneksi,"select * from tb_karyawan limit $halaman_awal, $batas");
                    $no=$halaman_awal + 1;
                    while ($row=mysqli_fetch_array($data_pegawai)) {
                    ?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $row['nip']?></td>
                        <td><?php echo $row['nama_karyawan']?></td>
                        <td><?php echo $row['umur']?></td>
                        <td>
                            <a href="index.php?halaman=edit_data&id_karyawan=<?php echo $row['id_karyawan'] ?>">
                                <input type="button" value="Edit" class="btn btn-warning btn-sm" name="">
                            </a>
                            <a onclick="return confirm('Yakin ingin menghapus data?')"
                                href="karyawan/aksi_hapus_karyawan.php?id_karyawan=<?php echo $row['id_karyawan'] ?>">
                                <input type="button" value="Hapus" class="btn btn-danger btn-sm" name="">
                            </a>
                        </td>
                    </tr>
                    <?php
}
?>
                </tbody>
            </table>
            <nav>
                <ul class="pagination float-right">
                    <li class="page-item">
                        <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>><i
                                class="fas fa-fw fa-backward"></i></a>
                    </li>
                    <?php 
				for($x=1;$x<=$total_halaman;$x++){
					?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
                    </li>
                    <?php
				}
				?>
                    <li class="page-item">
                        <a class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>><i
                                class="fas fa-fw fa-forward"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>