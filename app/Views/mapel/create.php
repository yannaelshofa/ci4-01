<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h3>Tambah Data Mapel</h3>
      <form action="/mapel/save" method="POST">
        <div class="form-group row">
          <label for="namaMapel" class="col-sm-2 col-form-label">Nama Mapel</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" id="namaMapel" name="namaMapel">
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