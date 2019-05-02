<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group">
                <?php foreach($jenis_pembayaran as $jenis) : ?>
                    <li class="list-group-item">
                        <?php echo $jenis['nama_jenis_pembayaran']; ?>
                        <a href="<?php echo base_url() ?>index.php/pembayaran/detail/<?php echo $jenis['id_jenis_pembayaran']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <!-- <h1><?=$this->session->userdata('username')?></h1> -->
</div>