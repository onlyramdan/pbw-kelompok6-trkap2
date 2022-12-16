<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container" >
    <div class="row">
        <div class="col-8">
            <H2 class="mt-3">Form Ubah data Event dan Pelatihan</H2>
        </div>
    </div>
    <form action="/event/update/<?= $row['id']; ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="gambarlama" value="<?= $row['gambar']; ?>"> 
<div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input type="text" class="form-control" name="judul" value="<?= $row['judul']; ?>">
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Gambar</label>
  <input class="form-control" type="file" id="formFile" name="gambar">
</div>
  <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <textarea id="editor" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
    </div>
    <div class="mb-3">
      <label for="linkpendaftaran" class="form-label">Link Pendaftaran</label>
      <input type="text" class="form-control" name="linkpendaftaran" value="<?= $row['linkpendaftaran']; ?>">
    </div>
    <div class="mb-3">
      <label for="kategori" class="form-label">Kategori</label>
      <input type="text" class="form-control" name="kategori" value="<?= $row['kategori']; ?>">
    </div>
    <div class="mb-5 d-grid gap-2 col-6 mx-auto">
                <input id="button" type="submit" class="btn text-light mt-5 shadow" style="--bs-btn-border-radius: 30rem; background-color: #fbbb90" value="ubah" width="20px">
    </div>
</form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
<?= $this->endSection('content'); ?>
