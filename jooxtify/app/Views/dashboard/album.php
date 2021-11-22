<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">ALBUM</h1>

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

  <a href="/dashboard/album/create" class="btn btn-primary mb-4">Tambah Album</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul Album</th>
        <th scope="col">Penyanyi</th>
        <th scope="col">Rilis</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      foreach ($data as $d) :
      ?>
        <tr>
          <th scope="row" class="align-middle"><?= $i; ?></th>
          <td class="align-middle"><?= $d['JUDUL_ALBUM']; ?></td>
          <td class="align-middle"><?= $d['ID_PENYANYI']; ?></td>
          <td class="align-middle"><?= $d['TGL_TERBIT_ALBUM']; ?></td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light" href="/dashboard/album/edit/<?= $d['ID_ALBUM'] ?>">Edit</a>
              <a class="btn btn-danger text-light" href="/dashboard/album/hapus/<?= $d['ID_ALBUM'] ?>">Hapus</a>
            </div>
          </td>
        </tr>
      <?php
        $i++;
      endforeach;
      ?>
    </tbody>
  </table>

  <h5>Soft Deletes</h5>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Id Album</th>
        <th scope="col">Judul Album</th>
        <th scope="col">Penyanyi</th>
        <th scope="col">Rilis</th>
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
          <td class="align-middle"><?= $del['ID_ALBUM']; ?></td>
          <td class="align-middle"><?= $del['JUDUL_ALBUM']; ?></td>
          <td class="align-middle"><?= $del['ID_PENYANYI']; ?></td>
          <td class="align-middle"><?= $del['TGL_TERBIT_ALBUM']; ?></td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light" href="/dashboard/album/restore/<?= $del['ID_ALBUM'] ?>">Restore</a>
              <a class="btn btn-danger text-light" href="/dashboard/album/hapus-permanen/<?= $del['ID_ALBUM'] ?>">Hapus Permanen</a>
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