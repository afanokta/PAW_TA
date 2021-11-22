<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">Daftar Lagu</h1>
  <a href="/dashboard/genre/create" class="btn btn-primary mb-4">Tambah Genre</a>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Id</th>
        <th scope="col">Nama Lagu</th>
        <!-- <th scope="col">Password</th> -->
        <th scope="col">PENYANYI</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($lagu as $song) : ?>
        <tr>
          <th scope="row" class="align-middle"><?= $i; ?></th>
          <td class="align-middle"><?= $song['ID_LAGU']; ?></td>
          <td class="align-middle"><?= $cust['JUDUL_LAGU']; ?></td>
          <td class="align-middle"><?= $cust['ID_PENYANYI']; ?></td>
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