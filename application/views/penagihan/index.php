<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Penagihan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_penagihan" class="form-control">
                        <div class="form-group">
                            <label for="jenis_pembayaran">Jenis Pembayaran</label>
                            <select name="jenis_pembayaran" class="form-control" id="jenis_pembayaran">
                                <?php foreach($nama_jenis_pembayaran as $nama) : ?>
                                    <option value="<?php echo $nama['id_jenis_pembayaran']; ?>"><?php echo $nama['nama_jenis_pembayaran']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Pembayaran</label>
                            <input type="date" name="tanggal" class="form-control" id="tanggal">
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>