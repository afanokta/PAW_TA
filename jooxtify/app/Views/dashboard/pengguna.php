<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">Pengguna JOOXTIFY</h1>
  <a href="/dashboard/pengguna/create" class="btn btn-primary mb-4">Tambah Pengguna</a>
  <?php
  $session = \Config\Services::session();
  $result = $session->getFlashdata('success');
  switch ($result) {
    case 'tambah':
      echo '<div class="alert alert-success w-100" role="alert">
      Data berhasil ditambahkan
    </div>';
      break;
    case 'restore':
      echo '<div class="alert alert-info w-100" role="alert">
      Data berhasil dipulihkan
    </div>';
      break;
    case 'update':
      echo '<div class="alert alert-info w-100" role="alert">
      Data berhasil diubah
    </div>';
      break;
    case 'delete':
      echo ' <div class="alert alert-danger w-100" role="alert">
      Data berhasil dihapus
    </div>';
      break;
    case 'fulldelete':
      echo '<div class="alert alert-danger w-100" role="alert">
      Data berhasil dihapus permanen
    </div>';
      break;
  }
  ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Id</th>
        <th scope="col">Username</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($data as $cust) : ?>
        <tr>
          <th scope="row" class="align-middle"><?= $i; ?></th>
          <td class="align-middle"><?= $cust['ID_USER']; ?></td>
          <td class="align-middle"><?= $cust['USERNAME']; ?></td>
          <td class="align-middle"><?= $cust['STATUS_USER']; ?></td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light" href="/dashboard/pengguna/edit/<?= $cust['ID_USER'] ?>">Edit</a>
              <a class="btn btn-danger text-light" href="/dashboard/pengguna/hapus/<?= $cust['ID_USER'] ?>">Hapus</a>
            </div>
          </td>
        </tr>
      <?php $i++;
      endforeach; ?>
    </tbody>
  </table>

  <h5>Soft Deletes</h5>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Id</th>
        <th scope="col">Username</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      foreach ($delete as $del) :
      ?>
        <tr>
          <th scope="row" class="align-middle"><?= $i; ?></th>
          <td class="align-middle"><?= $del['ID_USER']; ?></td>
          <td class="align-middle"><?= $del['USERNAME']; ?></td>
          <td class="align-middle"><?= $del['PASSWORD']; ?></td>
          <td class="align-middle"><?= $del['STATUS_USER']; ?></td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light" href="/dashboard/pengguna/restore/<?= $del['ID_USER'] ?>">Restore</a>
              <a class="btn btn-danger text-light" href="/dashboard/pengguna/hapus-permanen/<?= $del['ID_USER'] ?>">Hapus Permanen</a>
            </div>
          </td>
        </tr>
      <?php
        $i++;
      endforeach;
      ?>
    </tbody>
  </table>
</div>
<?= $this->endSection('content'); ?>