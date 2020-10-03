<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h3>Input Nilai</h3>
      <form action="/nilai/save" method="POST">
        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-2">
            <select class="form-control" id="idSiswa" name="idSiswa">
              <?php foreach ($siswa as $s) : ?>
                <option value="<?= $s['id']; ?>"><?= $s['nama']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="Guru" class="col-sm-2 col-form-label">Guru</label>
          <div class="col-sm-2">
            <select class="form-control" id="idMapel" name="idMapel">
              <?php foreach ($guru as $s) : ?>
                <option value="<?= $s['id']; ?>"><?= $s['nama']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="foto" class="col-sm-2 col-form-label">Mapel</label>
          <div class="col-sm-2">
            <select class="form-control" id="idGuru" name="idMapel">
              <?php foreach ($mapel as $s) : ?>
                <option value="<?= $s['id']; ?>"><?= $s['namaMapel']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="foto" class="col-sm-2 col-form-label">Nilai</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" name="nilai">
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