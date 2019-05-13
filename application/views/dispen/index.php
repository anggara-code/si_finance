<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
          <!-- <?php echo var_dump($dispen); ?> -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Nis</th>
                <th scope="col">Jenis Pembayaran</th>
                <th scope="col">Tanggal Dispen</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach($dispen as $dis) : ?>
                  <tr>  
                    <td><?php echo $dis['nis']; ?></>
                    <td><?php echo $dis['nama_jenis_pembayaran']; ?></td>
                    <td><?php echo $dis['tanggal_dispen']; ?></td>
                  </tr>
                  <?php endforeach ?>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>