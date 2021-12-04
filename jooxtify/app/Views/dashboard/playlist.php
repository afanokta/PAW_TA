<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">playlist JOOXTIFY</h1>
  <a href="/dashboard/playlist/create" class="btn btn-primary mb-4">Tambah Playlist</a>

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
        <th scope="col">Id playlist</th>
        <th scope="col">Judul Playlist</th>
        <th scope="col">id user</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($data as $p) : ?>
        <tr>
          <th scope="row" class="align-middle"><?= $i; ?></th>
          <td class="align-middle"><?= $p['ID_PLAYLIST']; ?></td>
          <td class="align-middle"><?= $p['JUDUL_PLAYLIST']; ?></td>
          <td class="align-middle"><?= $p['ID_USER']; ?></td>
          <td> <a href="/dashboard/playlist/detail/<?= $p['ID_PLAYLIST']; ?>" class="btn btn-primary">Detail</a>
          </td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light" href="/dashboard/playlist/edit/<?= $p['ID_PLAYLIST'] ?>">Edit</a>
              <a class="btn btn-danger text-light" href="/dashboard/playlist/hapus/<?= $p['ID_PLAYLIST'] ?>">Hapus</a>
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
        <th scope="col">Id playlist</th>
        <th scope="col">Judul Playlist</th>
        <th scope="col">id user</th>
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
          <td class="align-middle"><?= $del['ID_PLAYLIST']; ?></td>
          <td class="align-middle"><?= $del['JUDUL_PLAYLIST']; ?></td>
          <td class="align-middle"><?= $del['ID_USER']; ?></td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light" href="/dashboard/playlist/restore/<?= $del['ID_PLAYLIST'] ?>">Restore</a>
              <a class="btn btn-danger text-light" href="/dashboard/playlist/hapus-permanen/<?= $del['ID_PLAYLIST'] ?>">Hapus Permanen</a>
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