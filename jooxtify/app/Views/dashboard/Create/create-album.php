<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">TAMBAH ALBUM</h1>

  <form action="/dashboard/album" method="POST">
    <div class="mb-3">
      <label>Judul Album</label>
      <input type="text" class="form-control" size="20" name="judul">
    </div>
    <div class="mb-3">
      <label>Id Penyanyi</label>
      <input type="number" class="form-control" name="penyanyi">
    </div>
    <div class="mb-3">
      <label>Tanggal Rilis</label>
      <input type="date" class="form-control" name="rilis">
    </div>
    <button type="submit" class="btn btn-primary">Tambah Album</button>
  </form>
</div>
<?= $this->endSection('content'); ?>