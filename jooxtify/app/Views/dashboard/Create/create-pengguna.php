<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">TAMBAH DATA PENGGUNA</h1>

  <form action="/dashboard/pengguna" method="POST">
    <div class="mb-3">
      <label>Username</label>
      <input type="text" class="form-control" size="20" name="username">
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
      <label>Password</label>
      <input type="password" class="form-control" name="pass">
    </div>
    <div class="mb-3 d-flex flex-column">
      <label for="cars">Status User</label>

      <select name="status" id="" class="form-control">
        <option value="REGULER">REGULER</option>
        <option value="ADMIN">ADMIN</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Pengguna</button>
  </form>
</div>
<?= $this->endSection('content'); ?>