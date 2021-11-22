<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">Pengguna JOOXTIFY</h1>


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
          <th scope="row" class="align-middle"><?= $i; ?></th>
          <td class="align-middle"><?= $cust['ID_USER']; ?></td>
          <td class="align-middle"><?= $cust['USERNAME']; ?></td>
          <!-- <td><?= $cust['PASSWORD']; ?></td> -->
          <td class="align-middle"><?= $cust['STATUS_USER']; ?></td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light">Edit</a>
              <a class="btn btn-danger text-light">Hapus</a>
            </div>
          </td>
        </tr>
      <?php $i++;
      endforeach; ?>
    </tbody>
  </table>
</div>
<?= $this->endSection('content'); ?>