<?php foreach ($lagu as $l) :
  $file = '"' . $l['FILE_LAGU'] . '"';
  $lagu = '"' . $l['JUDUL_LAGU'] . '"';
  $penyanyi = '"' . $l['NAMA_PENYANYI'] . '"'; ?>

  <div class="col-md-4 col-lg-3 col-sm-12 d-flex flex-column">
    <div class="card p-4">
      <h4><?= $l['JUDUL_LAGU'] ?></h4>
      <h6><?= $l['NAMA_PENYANYI'] ?></h6>
      <p><?= $l['JUDUL_ALBUM'] ?></p>
      <div class="d-flex justify-content-around">
        <button onclick='play(<?= $file ?>,<?= $lagu ?>,<?= $penyanyi ?>)' value="<?= $l['JUDUL_LAGU'] ?>" id="btn" class="play btn btn-success">Play</button>
        <a href="/detail/<?= $l['ID_LAGU']; ?>" id="btn" class="btn btn-primary col-4">Detail</a>
      </div>
    </div>
  </div>
<?php endforeach ?>