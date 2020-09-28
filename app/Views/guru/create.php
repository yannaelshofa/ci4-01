<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h3>Tambah Data Guru</h3>
      <form action="/guru/save" method="POST">
        <div class="form-group row">
          <label for="nip" class="col-sm-2 col-form-label">Nip</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" id="nip" name="nip">
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
        </div>
        <div class="form-group row">
          <label for="foto" class="col-sm-2 col-form-label">Foto</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="foto" name="foto">
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