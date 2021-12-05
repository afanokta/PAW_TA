<?= $this->extend('layout/jooxtify-temp'); ?>

<?= $this->section('content'); ?>
<!-- <script src="/ajax.js"></script> -->
<div class="m-4">
  <h1 class="mb-4">JOOXTIFY</h1>
  <h3 class="my-4">Hai, <?php echo session()->get('username'); ?></h3>
  <div class="row" id="container">
    <?php foreach ($lagu as $l) :
      $file = '"' . $l['FILE_LAGU'] . '"';
      $lagu = '"' . $l['JUDUL_LAGU'] . '"';
      $penyanyi = '"' . $l['NAMA_PENYANYI'] . '"';
    ?>
      <div class="col-6 col-md-4 col-lg-3 d-flex flex-column">
        <div class="card p-4">
          <h2><?= $l['JUDUL_LAGU'] ?></h2>
          <h5><?= $l['NAMA_PENYANYI'] ?></h5>
          <p><?= $l['JUDUL_ALBUM'] ?></p>
          <button onclick='play(<?= $file ?>,<?= $lagu ?>,<?= $penyanyi ?>)' value="<?= $l['JUDUL_LAGU'] ?>" id="btn" class="play btn btn-success">Play</button>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>

<?= $this->endSection('content'); ?>