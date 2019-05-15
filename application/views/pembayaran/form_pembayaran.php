<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Pembayaran
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">

                            <input type="hidden" name="id_penagihan" class="form-control" id="id_penagihan" value="<?php echo $detail['id_penagihan']; ?>">

                            <input type="hidden" name="nis" class="form-control" id="nis" value="<?php echo $this->session->userdata('username'); ?>">
                        
                            <label for="nama">Nama Jenis Pembayaran</label>
                            <input type="text" name="nama_jenis_pembayaran" class="form-control" id="nama" value="<?php echo $detail['nama_jenis_pembayaran']; ?>" readonly>
                            <br>
                            <label for="nominal">Nominal Pembayaran</label>
                            <input type="number" name="nominal" class="form-control" id="nominal" value="<?php echo $detail['nominal']; ?>" readonly>
                            <br>
                            <label for="tanggal">Tanggal Penagihan</label>
                            <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo $detail['tanggal']; ?>" readonly>
                            <br>
                            <label for="rekening_pengirim">Rekening Pengirim</label>
                            <input type="number" name="rekening_pengirim" class="form-control" id="rekening_pengirim" value="<?php echo $donatur[0]['no_rekening']; ?>" readonly>
                            <br>
                            <label for="tanggal">Tanggal Pembayaran</label>
                            <input type="date" name="tanggal_pembayaran" class="form-control" id="tanggal">
                            
                            <input type="hidden" name="status" class="form-control" value="belum lunas">
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form Dispen Tagihan
            </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">

                            <input type="hidden" name="id_penagihan" class="form-control" id="id_penagihan" value="<?php echo $detail['id_penagihan']; ?>" readonly>

                            <label for="nis">NIS</label>
                            <input type="text" name="nis" class="form-control" id="nis" value="<?php echo $this->session->userdata('nis'); ?>" readonly>
                            <br>
                            <label for="nama">Nama Jenis Pembayaran</label>
                            <input type="text" name="nama_jenis_pembayaran" class="form-control" id="nama" value="<?php echo $detail['nama_jenis_pembayaran']; ?>" readonly>
                            <br>
                            <label for="tanggal">Tanggal Dispen</label>
                            <input type="date" name="tanggal_dispen" class="form-control" id="tanggal">
                            <br>
                        </div>
                        <button type="submit" name="dispen" class="btn btn-success">Simpan Dispen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>