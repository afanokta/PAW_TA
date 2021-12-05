<?= $this->extend('layout/jooxtify-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">PROFILE PENGGUNA</h1>

  <form action="/profile/update" method="POST">
    <div class="mb-3">
      <input type="hidden" name="id" value=<?= $Data['ID_USER'] ?>>
      <label>USERNAME</label>
      <input type="text" class="form-control" size="20" name="username" value="<?= $Data['USERNAME'] ?>">
    </div>
    <div class="mb-3">
      <label>EMAIL</label>
      <input type="text" class="form-control" size="20" name="email" value="<?= $Data['EMAIL'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update Pengguna</button>
  </form>
</div>
<?= $this->endSection('content'); ?>