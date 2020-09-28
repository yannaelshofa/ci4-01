<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h3>Tambah Data Siswa</h3>
      <form action="/siswa/save" method="POST">
        <div class="form-group row">
          <label for="nis" class="col-sm-2 col-form-label">Nis</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" id="nis" name="nis">
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