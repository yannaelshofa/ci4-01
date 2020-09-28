<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="/guru/create" class="btn btn-primary mt-4"> Tambah Data</a>
      <h1>Data Guru</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nip</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach ($guru as $k) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $k['nip']; ?></td>
              <td><?= $k['nama']; ?></td>
              <td>
                <a href="/guru/hapus/<?= $k['id']; ?>" class="btn btn-danger"> Hapus</a>
                <a href="/guru/edit/<?= $k['id']; ?>" class="btn btn-warning"> Edit</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>