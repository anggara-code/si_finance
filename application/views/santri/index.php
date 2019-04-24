<div class="container">

    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari data santri.." name="keyword">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" name="cari">Cari</button>
            </div>
                </div>
            </form>
        </div>
    </div>

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
                    <li class="list-group-item">
                        <?php echo $san['nama']; ?>
                        <a href="<?php echo base_url(); ?>index.php/santri/hapus/<?php echo $san['nis']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?')">hapus</a>
                        <a href="<?php echo base_url(); ?>index.php/santri/ubah/<?php echo $san['nis']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?php echo base_url(); ?>index.php/santri/detail/<?php echo $san['nis']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>