<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h3>Edit Data Guru</h3>
      <form action="/guru/update" method="POST">
        <input type="text" name="id" value="<?= $guru['id']; ?>">
        <div class="form-group row">
          <label for="nis" class="col-sm-2 col-form-label">Nip</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" id="nip" name="nip" value="<?= $guru['nip']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $guru['nama']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="foto" class="col-sm-2 col-form-label">Foto</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="foto" name="foto" value="<?= $guru['foto']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>