<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">Penyanyi JOOXTIFY</h1>
  <a href="/dashboard/penyanyi/create" class="btn btn-primary mb-4">Tambah Penyanyi</a>

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
        <th scope="col">Nama</th>
        <th scope="col">Tgl Lahir</th>
        <th scope="col">Foto</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($data as $p) : ?>
        <tr>
          <th scope="row" class="align-middle"><?= $i; ?></th>
          <td class="align-middle"><?= $p['ID_PENYANYI']; ?></td>
          <td class="align-middle"><?= $p['NAMA_PENYANYI']; ?></td>
          <td class="align-middle"><?= $p['TGL_LAHIR_PENYANYI']; ?></td>
          <td class="align-middle"><img src="/img-penyanyi/<?= $p['FOTO']; ?>" alt="" width="200px"></td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light" href="/dashboard/penyanyi/edit/<?= $p['ID_PENYANYI'] ?>">Edit</a>
              <a class="btn btn-danger text-light" href="/dashboard/penyanyi/hapus/<?= $p['ID_PENYANYI'] ?>">Hapus</a>
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
        <th scope="col">Nama</th>
        <th scope="col">Tgl Lahir</th>
        <th scope="col">Foto</th>
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
          <td class="align-middle"><?= $del['ID_PENYANYI']; ?></td>
          <td class="align-middle"><?= $del['NAMA_PENYANYI']; ?></td>
          <td class="align-middle"><?= $del['TGL_LAHIR_PENYANYI']; ?></td>
          <td class="align-middle"><img src="/img-penyanyi/<?= $del['FOTO']; ?>" alt="" width="200px"></td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light" href="/dashboard/penyanyi/restore/<?= $del['ID_PENYANYI'] ?>">Restore</a>
              <a class="btn btn-danger text-light" href="/dashboard/penyanyi/hapus-permanen/<?= $del['ID_PENYANYI'] ?>">Hapus Permanen</a>
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