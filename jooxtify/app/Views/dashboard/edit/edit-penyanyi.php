<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">EDIT PENYANYI</h1>

  <form action="/dashboard/penyanyi/update" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Nama Penyanyi</label>
      <input type="hidden" name="id" value="<?= $data['ID_PENYANYI'] ?>">
      <input type="text" class="form-control" size="20" name="nama" value="<?= $data['NAMA_PENYANYI']; ?>">
    </div>
    <div class="mb-3">
      <label>Tanggal Lahir Penyanyi</label>
      <input type="date" class="form-control" size="20" name="tgl" value="<?= $data['TGL_LAHIR_PENYANYI']; ?>">
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Upload Foto</label>
      <input class="form-control p-0 m-0" type="file" id="formFile" name="foto">
      <input type="hidden" name="lastfile" value="<?= $data['FOTO'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Edit Penyanyi</button>
  </form>
</div>
<?= $this->endSection('content'); ?>