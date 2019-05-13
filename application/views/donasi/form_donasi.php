<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Donasi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" name="nis" class="form-control" id="nis" value="<?php echo $this->session->userdata('nis'); ?>">
                            
                            <label>Nama Donatur</label>
                            <input type="text" class="form-control" value="<?php echo $this->session->userdata('username'); ?>" readonly>
                            <br>
                            <label for="no_rekening">Nomor Rekening</label>
                            <input type="text" name="no_rekening" class="form-control" id="no_rekening" >
                            <br>
                            <label for="nominal">Nominal</label>
                            <input type="number" name="nominal" class="form-control" id="nominal" >
                            <br>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
</div>