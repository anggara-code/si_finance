<!-- <?php echo var_dump($pembayaran); ?> -->
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Nis</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Pembayaran</th>
                <th scope="col">Tanggal Penagihan</th>
                <th scope="col">Tanggal Pembayaran</th>
                <th scope="col">Rekening Pengirim</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach($pembayaran as $pem) : ?>
                  <tr>  
                    <td><?php echo $pem['nis']; ?></>
                    <td><?php echo $pem['nama']; ?></td>
                    <td><?php echo $pem['nama_jenis_pembayaran']; ?></td>
                    <td><?php echo $pem['tanggal']; ?></td>
                    <td><?php echo $pem['tanggal_pembayaran']; ?></td>
                    <td><?php echo $pem['rekening_pengirim']; ?></td>
                    <td><?php echo $pem['status']; ?></td>
                  </tr>
                  <?php endforeach ?>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>