<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">EDIT LAGU</h1>

  <form action="/dashboard/lagu/update" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <input type="hidden" name="id" value=<?= $data['ID_LAGU'] ?>>
      <label>Judul Lagu</label>
      <input type="text" class="form-control" size="20" name="judul" value="<?= $data['JUDUL_LAGU'] ?>">
    </div>
    <div class="mb-3 d-flex flex-column">
      <label for="cars">Penyanyi</label>

      <select name="penyanyi" id="cars" class="form-control">
        <option value="<?= $data['ID_PENYANYI']; ?>"><?php echo $data['ID_PENYANYI']; ?></option>
        <?php foreach ($penyanyi as $p) : ?>
          <option value="<?= $p['ID_PENYANYI']; ?>"><?php echo $p['ID_PENYANYI'] . ' | ' . $p['NAMA_PENYANYI']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3 d-flex flex-column">
      <label for="album">Album</label>

      <select name="album" id="album" class="form-control">
        <option value="<?= $data['ID_ALBUM']; ?>"><?php echo $data['ID_ALBUM']; ?></option>
        <?php foreach ($album as $p) : ?>
          <option value="<?= $p['ID_ALBUM']; ?>"><?php echo $p['ID_ALBUM'] . ' | ' . $p['JUDUL_ALBUM']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3">
      <label>file Lagu</label>
      <input type="file" class="form-control" name="file">
      <input type="hidden" name="lastfile" value="<?=$data['FILE_LAGU']?>">
    </div>
    <div class="mb-3">
      <label>Tahun Terbit</label>
      <input type="number" class="form-control" name="tahun" value="<?=$data['TAHUN_TERBIT_LAGU']?>">
    </div>
    <button type="submit" class="btn btn-primary">Update Lagu</button>
  </form>
</div>
<?= $this->endSection('content'); ?>