<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container" >
<h2 class="mt-3 text-center">Daftar Pelatihan dan Event</h2>
<table class="table table-striped mt-5 mb-5">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Judul</th>
      <th scope="col">Gambar</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Kategori</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($event as $row) : ?>
    <tr>
      <th scope="row"><?= $row['id']; ?></th> 
      <td><?= $row['judul']; ?></td>
      <td ><img src="/img/<?= $row['gambar']; ?>" alt="" srcset=""> Name : <?= $row['gambar']; ?> </td>
      <td><?= $row['deskripsi']; ?></td>
      <td><?= $row['kategori']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
<?= $this->endSection('content'); ?>
