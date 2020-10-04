<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Selamat Datang <?= session()->get('username'); ?></h1>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>