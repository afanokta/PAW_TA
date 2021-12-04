<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">EDIT GENRE</h1>

  <form action="/dashboard/genre/update" method="POST">
<?= csrf_field() ?>
    <div class="mb-3">
      <input type="hidden" name="id" value=<?= $data['ID_GENRE'] ?>>
      <label>Nama Genre</label>
      <input type="text" class="form-control" size="20" name="genre" value="<?= $data['GENRE'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update Genre</button>
  </form>
</div>
<?= $this->endSection('content'); ?>