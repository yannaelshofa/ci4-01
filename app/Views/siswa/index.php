<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="/siswa/create" class="btn btn-primary mt-4"> Tambah Data</a>
      <h1>Data Siswa</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nis</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach ($siswa as $k) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $k['nis']; ?></td>
              <td><?= $k['nama']; ?></td>
              <td><a href="/siswa/detail/<?= $k['id']; ?>" class="btn btn-success"> Detail</a>
                <a href="/siswa/hapus/<?= $k['id']; ?>" class="btn btn-danger"> Hapus</a>
                <a href="/siswa/edit/<?= $k['id']; ?>" class="btn btn-warning"> Edit</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>