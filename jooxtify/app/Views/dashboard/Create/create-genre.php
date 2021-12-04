<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">GENRE LAGU</h1>

  <form action="/dashboard/genre" method="POST">
    <div class="mb-3">
      <label>Genre</label>
      <input type="text" class="form-control" size="20" name="genre">
    </div>
    <button type="submit" class="btn btn-primary">Tambah Genre</button>
  </form>
</div>
<?= $this->endSection('content'); ?>