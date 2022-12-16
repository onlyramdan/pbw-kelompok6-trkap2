<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="text-center mt-5 mb-5">
    <img src="/img/legalisasi_umkm.svg" alt="legalisai" width="500px">
</div>
<section id="legalisasi">
<div class="container" >
    <div class="row">
        <div class="col" >
            <img src="/img/tata-cara-daftar.svg" alt="tata_cara_daftar" width="600px">
        </div>
        <div class="col text-center">
          <img src="/img/legal.png" alt="legalisasi" width="400px">
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
          <img src="/img/legalisasi2.svg" alt="legalisasi" width="380px">
        </div>
        <div class="col mb-5">
            <img src="/img/tata-cara-daftar-2.svg" alt="tatacaradaftar" width="600px">
        </div>
    </div>
    <div class="d-grid mb-5 gap-2 col-6 mx-auto text-center ">
    <a href="https://ui-login.oss.go.id/login?action=register&type=umk"><button class="btn btn-light rounded-pill text-light" type="button" style="background-color: #fbbb90;" >Daftar Legalisasi UMKM</button></a>
    </div>
</div>
</section>
<?= $this->endSection('content'); ?>