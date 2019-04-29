<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group">
                <?php foreach($detail as $det) : ?>
                    <li class="list-group-item">
                        <?php echo $det['nama_jenis_pembayaran']; ?>
                        <?php echo $det['tanggal']; ?><br>
                        Rp. <?php echo $det['nominal']; ?>
                        <a href="<?php echo base_url(); ?>index.php/pembayaran/bayar/<?php echo $det['id_penagihan']; ?>" class="btn btn-success float-right">bayar</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>