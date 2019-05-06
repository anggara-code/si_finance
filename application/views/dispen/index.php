<!-- <div class="container">
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
</div> -->
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>