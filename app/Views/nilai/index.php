<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="/nilai/create" class="btn btn-primary mt-4"> Tambah Data</a>
      <h1>Data Nilai</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Guru</th>
            <th scope="col">Mapel</th>
            <th scope="col">Nilai</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>

          <?php foreach ($siswa as $k) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $k['namaSiswa']; ?></td>
              <td><?= $k['namaGuru']; ?></td>
              <td><?= $k['namaMapel']; ?></td>
              <td><?= $k['nilai']; ?></td>
              <td>
                <a href="/nilai/hapus/<?= $k['id']; ?>" class="btn btn-danger"> Hapus</a>
                <a href="/nilai/edit/<?= $k['id']; ?>" class="btn btn-warning"> Edit</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>