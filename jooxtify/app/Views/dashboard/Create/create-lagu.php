<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">TAMBAH LAGU</h1>

  <form action="/dashboard/lagu" method="POST" enctype="multipart/form-data">
    <div class="mb-3 d-flex flex-column">
      <label for="cars">Penyanyi</label>

      <select name="penyanyi" id="cars" class="form-control">
        <?php foreach ($penyanyi as $p) : ?>
          <option value="<?= $p['ID_PENYANYI']; ?>"><?php echo $p['ID_PENYANYI'] . ' | ' . $p['NAMA_PENYANYI']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3 d-flex flex-column">
      <label for="album">Album</label>

      <select name="album" id="album" class="form-control">
        <?php foreach ($album as $a) : ?>
          <option value="<?= $a['ID_ALBUM']; ?>"><?php echo $a['ID_ALBUM'] . ' | ' . $a['JUDUL_ALBUM']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3 d-flex flex-column">
      <label for="genre">Genre</label>

      <select name="genre" id="genre" class="form-control">
        <?php foreach ($genre as $g) : ?>
          <option value="<?= $g['ID_GENRE']; ?>"><?php echo $g['ID_GENRE'] . ' | ' . $g['GENRE']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3">
      <label>Judul Lagu</label>
      <input type="text" class="form-control" name="judul">
    </div>
    <div class="mb-3">
      <label>file Lagu</label>
      <input type="file" class="form-control" name="file">
    </div>
    <div class="mb-3">
      <label>Tahun Terbit</label>
      <input type="number" class="form-control" name="tahun">
    </div>
    <button type="submit" class="btn btn-primary">Tambah Album</button>
  </form>
</div>
<?= $this->endSection('content'); ?>