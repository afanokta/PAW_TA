<?php foreach ($lagu as $l) : ?>
      <div class="col-6 col-md-4 col-lg-3 d-flex flex-column">
        <div class="card p-4">
          <h2><?= $l['JUDUL_LAGU'] ?></h2>
          <h5><?= $l['NAMA_PENYANYI'] ?></h5>
          <p><?= $l['JUDUL_ALBUM'] ?></p>
          <button onclick="play('<?php echo $l['FILE_LAGU']; ?>')">Play</button>
        </div>
    </div>
<?php endforeach ?>