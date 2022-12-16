<!-- Nabvbar -->
<nav class="navbar shadow-sm navbar-expand-lg bg-light">
    <div class="container container-fluid">
      <a class="mt-2" href="/">
        <img src="/img/logo5.svg" alt="logo" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-xl-flex justify-content-lg-end" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 me-lg-5 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/legalisasi">Legalisasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/event/index">Pelatihan & Event</a>
          </li>
          <?php if(in_groups('admin')) : ?>
          <li class="nav-item">
            <a class="nav-link" href="/admin/index">Admin</a>
          </li>
          <?php endif; ?>
          <li class="nav-item">
            <a class="nav-link" href="/pages/about">Profil</a>
          </li>
          <li class="nav-item ">
          <?php if(logged_in()): ?>
            <a href="/logout"> <button id="button" type="button"  class="btn text-light" style="--bs-btn-border-radius: 30rem; background-color: #464F6A">Keluar</button></a>
          <?php else : ?>
            <a href="/login"> <button id="button" type="button"  class="btn text-light" style="--bs-btn-border-radius: 30rem; background-color: #464F6A">Masuk</button></a>
         <?php endif; ?>
          </li>

        </ul>
        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
          <button class="btn rounded-circle d-flex justify-content-center align-items-center text-light" style="background-color: #464F6A;"
            type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
              class="bi bi-search" viewBox="0 0 16 16">
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg></button>
        </form> -->
      </div>
    </div>
  </nav>