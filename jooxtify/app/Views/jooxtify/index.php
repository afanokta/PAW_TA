<?= $this->extend('layout/jooxtify-temp'); ?>

<?= $this->section('content'); ?>
<!-- <script src="/ajax.js"></script> -->
<div class="m-4">
  <h1 class="mb-4">JOOXTIFY</h1>
  <h3 class="my-4">Hai, <?php echo session()->get('username'); ?></h3>
  <div class="row" id="card">
    <?php foreach ($lagu as $l) : ?>
      <div class="col-6 col-md-4 col-lg-3 d-flex flex-column" id="container">
        <div class="card p-4">
          <h2><?= $l['NAMA_PENYANYI'] ?></h2>
          <h4><?= $l['JUDUL_LAGU'] ?></h4>
          <p><?= $l['JUDUL_ALBUM'] ?></p>
          <button onclick="play('<?php echo $l['FILE_LAGU']; ?>')">Play</button>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>

<?= $this->endSection('content'); ?>