<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="/mapel/create" class="btn btn-primary mt-4"> Tambah Data</a>
      <h1>Data Mapel</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>

            <th scope="col">Nama Mapel</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach ($mapel as $k) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $k['namaMapel']; ?></td>

              <td>
                <a href="/mapel/hapus/<?= $k['id']; ?>" class="btn btn-danger"> Hapus</a>
                <a href="/mapel/edit/<?= $k['id']; ?>" class="btn btn-warning"> Edit</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>