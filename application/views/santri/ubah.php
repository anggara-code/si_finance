<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Santri
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nis">Nis</label>
                            <input type="number" name="nis" class="form-control" id="nis" value="<?php echo $santri['nis']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $santri['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $santri['alamat']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Nomor Handphone</label>
                            <input type="number" name="no_hp" class="form-control" id="no_hp" value="<?php echo $santri['no_hp']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?php echo $santri['jenis_kelamin']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?php echo $santri['tanggal_lahir']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="angkatan">Angkatan</label>
                            <input type="number" name="angkatan" class="form-control" id="angkatan" value="<?php echo $santri['angkatan']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_ayah">Nama Ayah</label>
                            <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="<?php echo $santri['nama_ayah']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="<?php echo $santri['nama_ibu']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_wali">Nama Wali</label>
                            <input type="text" name="nama_wali" class="form-control" id="nama_wali" value="<?php echo $santri['nama_ibu']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat_orangtua">Alamat Orangtua</label>
                            <input type="text" name="alamat_orangtua" class="form-control" id="alamat_orangtua" value="<?php echo $santri['alamat_orangtua']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="telp_orangtua">Telephone Orangtua</label>
                            <input type="number" name="telp_orangtua" class="form-control" id="telp_orangtua" value="<?php echo $santri['telp_orangtua']; ?>">
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>