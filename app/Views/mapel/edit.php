<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h3>Edit Data Mapel</h3>
      <form action="/mapel/update" method="POST">
        <input type="hidden" name="id" value="<?= $mapel['id']; ?>">
        <div class="form-group row">
          <label for="mapel" class="col-sm-2 col-form-label">Nama mapel</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" id="namaMapel" name="namaMapel" value="<?= $mapel['namaMapel']; ?>">
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