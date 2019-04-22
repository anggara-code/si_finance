<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>index.php/santri/tambah" class="btn btn-primary">Tambah Data Santri</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Santri</h3>
            <ul class="list-group">
                <?php foreach($santri as $san) : ?>
                    <li class="list-group-item"><?php echo $san['nama']; ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>