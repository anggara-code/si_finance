<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Santri
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">

                            <input type="hidden" name="id_penagihan" class="form-control" id="id_penagihan" value="<?php echo $detail['id_penagihan']; ?>" readonly>

                            <label for="nama">Nama Jenis Pembayaran</label>
                            <input type="text" name="nama_jenis_pembayaran" class="form-control" id="nama" value="<?php echo $detail['nama_jenis_pembayaran']; ?>" readonly>
                            <br>
                            <label for="nominal">Nominal Pembayaran</label>
                            <input type="number" name="nominal" class="form-control" id="nominal" value="<?php echo $detail['nominal']; ?>" readonly>
                            <br>
                            <label for="tanggal">Nominal Pembayaran</label>
                            <input type="text" name="tanggal" class="form-control" id="tanggal" value="<?php echo $detail['tanggal']; ?>" readonly>
                            <br>
                            <label for="foto">Foto Bukti Pembayaran</label>
                            <input type="file" name="foto" class="form-control" id="foto">
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>