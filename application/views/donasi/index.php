<!-- <?php var_dump($detail); ?> -->
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Nama Donatur</th>
                <th scope="col">No Rekening</th>
                <th scope="col">Nominal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach($detail as $det) : ?>
                  <tr> 
                    <td><?php echo $det['nama']; ?></td>
                    <td><?php echo $det['no_rekening']; ?></td>
                    <td><?php echo $det['nominal']; ?></td>
                  </tr>
                  <?php endforeach ?>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>