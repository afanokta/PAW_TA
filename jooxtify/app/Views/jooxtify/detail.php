<?= $this->extend('layout/jooxtify-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4 text-center">Detail lagu</h1>
  <?php foreach ($lagu  as $l) ?>
  <div class="card mx-auto" style="width: 40%;">
    <img class="card-img-top" src="/img-penyanyi/<?= $l['FOTO']; ?>" alt="Card image cap" width="200px">
    <div class="card-body">
      <h5 class="card-title"><?= $l['JUDUL_LAGU']; ?></h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Penyanyi : <?= $l['NAMA_PENYANYI']; ?></li>
      <li class="list-group-item">Album : <?= $l['JUDUL_ALBUM']; ?></li>
      <li class="list-group-item">Tahun Rilis : <?= $l['TAHUN_TERBIT_LAGU']; ?></li>
      <li class="list-group-item">Genre : <?= $l['GENRE']; ?></li>
    </ul>
    <div class="card-body">
      <a href="/" class="btn btn-primary" style="width: 100%;">Ke Halaman Utama</a>
    </div>
  </div>
</div>
<?= $this->endSection('content'); ?>