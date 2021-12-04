<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<?php

$result = session()->getFlashdata('success');
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
<div class="m-4">
  <h1 class="mb-4">GENRE LAGU</h1>

  <a href="/dashboard/genre/create" class="btn btn-primary mb-4">Tambah Genre</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Id</th>
        <th scope="col">Genre</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($genre as $gen) : ?>
        <tr>
          <th scope="row" class="align-middle"><?= $i; ?></th>
          <td class="align-middle"><?= $gen['ID_GENRE']; ?></td>
          <td class="align-middle"><?= $gen['GENRE']; ?></td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light" href="/dashboard/genre/edit/<?=$gen['ID_GENRE']?>">Edit</a>
              <a class="btn btn-danger text-light" href="/dashboard/genre/hapus/<?=$gen['ID_GENRE']?>">Hapus</a>
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
        <th scope="col">Genre</th>
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
          <td class="align-middle"><?= $del['ID_GENRE']; ?></td>
          <td class="align-middle"><?= $del['GENRE']; ?></td>
          <td class="align-middle">
            <div>
              <a class="btn btn-primary text-light" href="/dashboard/genre/restore/<?=$del['ID_GENRE']?>">Restore</a>
              <a class="btn btn-danger text-light" href="/dashboard/genre/hapus-permanen/<?=$del['ID_GENRE']?>" >Hapus Permanen</a>
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