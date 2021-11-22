<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">Pengguna JOOXTIFY</h1>


  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Tgl Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($penyanyi as $p) : ?>
        <tr>
          <th scope="row" class="align-middle"><?= $i; ?></th>
          <td class="align-middle"><?= $p['NAMA_PENYANYI']; ?></td>
          <td class="align-middle"><?= $p['TGL_LAHIR_PENYANYI']; ?></td>
          <td class="align-middle"><?= $p['ALAMAT_PENYANYI']; ?></td>
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