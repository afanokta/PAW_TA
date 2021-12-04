<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">Lagu JOOXTIFY</h1>
  <a href="/dashboard/lagu/create" class="btn btn-primary mb-4">Tambah Lagu</a>
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
        <th scope="col">Id lagu</th>
        <th scope="col">Id penyanyi</th>
        <th scope="col">Id album</th>
        <th scope="col">judul</th>
        <th scope="col">file</th>
        <th scope="col">tahun terbit</th>
        <th scope="col">aksi</th>

      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($data as $song) : ?>
        <tr>
          <th scope="row" class="align-middle"><?= $i; ?></th>
          <td class="align-middle"><?= $song['ID_LAGU']; ?></td>
          <td class="align-middle"><?= $song['ID_PENYANYI']; ?></td>
          <td class="align-middle"><?= $song['ID_ALBUM']; ?></td>
          <td class="align-middle"><?= $song['JUDUL_LAGU']; ?></td>
          <td class="align-middle"><?= $song['FILE_LAGU']; ?></td>
          <td class="align-middle"><?= $song['TAHUN_TERBIT_LAGU']; ?></td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light" href="/dashboard/lagu/edit/<?= $song['ID_LAGU'] ?>">Edit</a>
              <a class="btn btn-danger text-light" href="/dashboard/lagu/hapus/<?= $song['ID_LAGU'] ?>">Hapus</a>
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
        <th scope="col">Id lagu</th>
        <th scope="col">Id penyanyi</th>
        <th scope="col">Id album</th>
        <th scope="col">judul</th>
        <th scope="col">file</th>
        <th scope="col">tahun terbit</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      foreach ($delete as $del) :
      ?>
        <tr>
          <th scope="row" class="align-middle"><?= $i; ?></th>
          <td class="align-middle"><?= $del['ID_LAGU']; ?></td>
          <td class="align-middle"><?= $del['ID_PENYANYI']; ?></td>
          <td class="align-middle"><?= $del['ID_ALBUM']; ?></td>
          <td class="align-middle"><?= $del['JUDUL_LAGU']; ?></td>
          <td class="align-middle"><?= $del['FILE_LAGU']; ?></td>
          <td class="align-middle"><?= $del['TAHUN_TERBIT_LAGU']; ?></td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light" href="/dashboard/lagu/restore/<?= $del['ID_LAGU'] ?>">Restore</a>
              <a class="btn btn-danger text-light" href="/dashboard/lagu/hapus-permanen/<?= $del['ID_LAGU'] .'/'. $del['FILE_LAGU']?>">Hapus Permanen</a>
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