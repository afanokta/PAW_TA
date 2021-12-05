<?= $this->extend('layout/dashboard-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h1 class="mb-4">EDIT PENGGUNA</h1>

  <form action="/dashboard/pengguna/update" method="POST">
    <div class="mb-3">
      <input type="hidden" name="id" value=<?= $data['ID_USER'] ?>>
      <label>USERNAME</label>
      <input type="text" class="form-control" size="20" name="username" value="<?= $data['USERNAME'] ?>">
    </div>

    <div class="mb-3">
      <label>EMAIL</label>
      <input type="text" class="form-control" size="20" name="email" value="<?= $data['EMAIL'] ?>">
    </div>

    <div class="mb-3 d-flex flex-column">
      <label for="cars">STATUS USER</label>

      <select name="status" id="cars" class="form-control">
        <option value="<?= $data['STATUS_USER']; ?>"><?php echo $data['STATUS_USER']; ?></option>
        <?php
        $arr = ['REGULER', 'PREMIUM', 'ADMIN'];
        $key = array_search($data['STATUS_USER'], $arr);
        unset($arr[$key]);
        foreach ($arr as $a) :
        ?>
          <option value="<?= $a; ?>"><?php echo $a; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Update Pengguna</button>
  </form>
</div>
<?= $this->endSection('content'); ?>