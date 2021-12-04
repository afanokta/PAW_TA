<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">TAMBAH PENYANYI</h1>

  <form action="/dashboard/penyanyi" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Nama Penyanyi</label>
      <input type="text" class="form-control" size="20" name="nama">
    </div>
    <div class="mb-3">
      <label>Tanggal Lahir Penyanyi</label>
      <input type="date" class="form-control" size="20" name="tgl">
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Upload Foto</label>
      <input class="form-control p-0 m-0" type="file" id="formFile" name="foto">
    </div>
    <button type="submit" class="btn btn-primary">Tambah Penyanyi</button>
  </form>
</div>
<?= $this->endSection('content'); ?>