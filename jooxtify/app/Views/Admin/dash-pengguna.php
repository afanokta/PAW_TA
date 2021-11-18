<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="mx-4">
  <h1>Hello World !!!!</h1>
  <p>ini adalah halaman dashboard pengguna</p>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Id</th>
        <th scope="col">Username</th>
        <!-- <th scope="col">Password</th> -->
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($pengguna as $cust) : ?>
        <tr>
          <th scope="row"><?= $i; ?></th>
          <td><?= $cust['ID_USER']; ?></td>
          <td><?= $cust['USERNAME']; ?></td>
          <!-- <td><?= $cust['PASSWORD']; ?></td> -->
          <td><?= $cust['STATUS_USER']; ?></td>
          <td>
            <div>
              <a class="btn btn-primary">Edit</a>
              <a class="btn btn-danger">Hapus</a>
            </div>
          </td>
        </tr>
      <?php $i++;
      endforeach; ?>
    </tbody>
  </table>
</div>
<?= $this->endSection('content'); ?>