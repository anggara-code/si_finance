<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <!-- <?php echo var_dump($santri); ?> -->
            <div class="card">
                <h5 class="card-header">Detail Data Santri</h5>
                <div class="card-body">
                    <h5 class="card-title">Nis  : <?php echo $santri['nis']; ?></h5>
                    <h5 class="card-title">Nama : <?php echo $santri['nama']; ?></h5>
                    <h5 class="card-title">Alamat : <?php echo $santri['alamat']; ?></h5>
                    <h5 class="card-title">No HP : <?php echo $santri['no_hp']; ?></h5>
                    <h5 class="card-title">Jenis Kelamin : <?php echo $santri['jenis_kelamin']; ?></h5>
                    <h5 class="card-title">Tanggal Lahir : <?php echo $santri['tanggal_lahir']; ?></h5>
                    <h5 class="card-title">Angkatan : <?php echo $santri['angkatan']; ?></h5>
                    <h5 class="card-title">nama_ayah : <?php echo $santri['nama_ayah']; ?></h5>
                    <h5 class="card-title">Nama Ibu : <?php echo $santri['nama_ibu']; ?></h5>
                    <h5 class="card-title">Nama Wali : <?php echo $santri['nama_wali']; ?></h5>
                    <h5 class="card-title">Alamat Orangtua : <?php echo $santri['alamat_orangtua']; ?></h5>
                    <h5 class="card-title">Telp Orangtua : <?php echo $santri['telp_orangtua']; ?></h5>
                    <a href="<?php echo base_url(); ?>index.php/santri" class="btn btn-primary">kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>