<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container" >
<h2 class="mt-3 text-center">Pelatihan dan Event</h2>
<div class="container px-4 py-5 mt-5 mb-5" id="custom-cards">
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <?php foreach($event as $row) : ?>
    <div class="col">
        <div class="card h-100  rounded-4 shadow-lg">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-dark text-shadow-1">
            <img src="/img/<?= $row['gambar']; ?>" alt="<?= $row['gambar']; ?>">
            <h4 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?= $row['judul']; ?></h4>
            <p>Kategori : <?= $row['kategori']; ?></p>
            <p><?= $row['deskripsi']; ?></p>
            <ul class="list-unstyled mt-auto text-center">
              <a href="<?= $row['linkpendaftaran']; ?>" target="_blank" rel="noopener noreferrer">
              <button id="button" type="button" class="btn text-light mt-5 shadow" style="--bs-btn-border-radius: 30rem; background-color: #fbbb90">Daftar</button></a>
            </ul>
          </div>    
        </div>
    </div>
    <?php endforeach; ?>
    </div>
    
</div>
</div>

<?= $this->endSection('content'); ?>
