<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">EDIT ALBUM</h1>

  <form action="/dashboard/album/update" method="POST">
    <div class="mb-3">
        <input type="hidden" name="id" value=<?=$data['ID_ALBUM']?>>
      <label>Judul Album</label>
      <input type="text" class="form-control" size="20" name="judul" value="<?=$data['JUDUL_ALBUM']?>">
    </div>
    <div class="mb-3">
      <label>Id Penyanyi</label>
      <input type="number" class="form-control" name="penyanyi" value="<?=$data['ID_PENYANYI']?>">
    </div>
    <div class="mb-3">
      <label>Tanggal Rilis</label>
      <input type="date" class="form-control" name="rilis" value=<?=$data['TGL_TERBIT_ALBUM']?>>
    </div>
    <button type="submit" class="btn btn-primary">Update Album</button>
  </form>
</div>
<?= $this->endSection('content'); ?>