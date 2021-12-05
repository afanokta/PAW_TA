<?= $this->extend('layout/jooxtify-temp'); ?>

<?= $this->section('content'); ?>
<div class="m-4">
  <h3 class="mb-4">About</h3>

  <p>Website Jooxtify dibuat oleh : <br>
  <table>

    <?php $kel = [
      [
        'nama' => 'Ardhya Khrisna Chandra',
        'nim' => '205150700111006'
      ],
      [
        'nama' => 'Rheza Firmandha',
        'nim' => '205150700111007'
      ],
      [
        'nama' => 'Mohammad Hasan Nasrullah',
        'nim' => '205150700111012'
      ],
      [
        'nama' => 'Rafli Daffa Rahman',
        'nim' => '205150700111025'
      ],
      [
        'nama' => 'Mukhammad Afan Oktafianto',
        'nim' => '205150700111032'
      ],
    ];
    $i = 1;
    foreach ($kel as $k) : ?>
      <tr>
        <td><?= $i++; ?>.</td>
        <td><?= $k['nama']; ?></td>
        <td><?= $k['nim']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
  <br>
  <p class="text-center">Website ini dibuat bertujuan untuk memenuhi Tugas Akhir Mata Kuliah Pengembangan Aplikasi WEB</p>
</div>
<?= $this->endSection('content'); ?>