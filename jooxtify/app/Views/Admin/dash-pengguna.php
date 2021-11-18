<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="mx-4">
  <h1>Hello World !!!!</h1>
  <p>ini adalah halaman dashboard pengguna</p>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pengguna as $cust) : ?>
        <tr>
          <th scope="row"><?= $cust['ID_USER']; ?></th>
          <td><?= $cust['USERNAME']; ?></td>
          <td><?= $cust['PASSWORD']; ?></td>
          <td><?= $cust['STATUS_USER']; ?></td>
          <td>
            <div>
              <a class="btn btn-primary">Edit</a>
              <a class="btn btn-danger">Hapus</a>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?= $this->endSection('content'); ?>