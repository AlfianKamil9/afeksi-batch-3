<style>
    * {
      margin: 0;
      padding: 0;
      font-family: "Rubik", sans-serif !important;
      text-decoration: none !important;
    }
    
  /* NAVBAR */
.navbar {
  box-shadow: 0px 13px 40px 0px rgba(0, 0, 0, 0.3);
  position: fixed !important;
  width: 100%;
  background-color: white;
  z-index: 2;
}
.navbar li a {
  color: #94a8be;
}

.button-daftar:hover {
  transform: scale(1.1);
}

.button-login:hover {
  transform: scale(1.1);
  background: #233dff;
}

.button-daftar:focus {
  outline: none;
}

.button-login:focus {
  outline: #233dff;
}

.dropdown .dropdown-menu {
  margin-left: -20%;
}

@media (max-width: 1000px) {
  .dropdown .dropdown-menu {
    margin-left: 0;
  }
}

/* END NAVBAR */

  </style>
 <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets/img/logo.png" alt="Logo" class="d-inline-block align-text-top w-50" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" id="navbarOffcanvas" tabindex="-1" aria-labelledby="navbarOffcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-semibold text-uppercase" id="navbarOffcanvasLabel">Afeksi</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav ms-auto my-lg-2 gap-1 mt-2">
          <li class="nav-item">
            <a class="nav-link" href="#">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">Layanan & Produk</a>
            <!-- <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button> -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" href="#">Kegiatan</a>
            <!-- <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button> -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Karir</a>
          </li>
        </ul>

        <div class="ms-auto d-flex p-2 mx-lg-3 gap-2">
          <div class="dropdown">
              <a class="text-primary" data-bs-toggle="dropdown" aria-expanded="false" href="#">Hi, Bimo<img src="assets/img/dashboard-profile/icon.png" class="ms-3"></a>
              <ul class="dropdown-menu mt-3">
                <li  class="mb-2"><a class="dropdown-item" href="#"><img src="assets/img/dashboard-profile/user-blue.svg" class="me-3" width = "20" height = "20" style="fill: #2139f9;"></img>Profile</a></li>
    
                <li class="mb-2"><a class="dropdown-item" href="#"> <img src="assets/img/dashboard-profile/courses-blue.svg" width = "20" height = "20" style="fill: #2139f9;" class="me-3"></img> My Courses</a></li>
    
                <li class="mb-2"><a class="dropdown-item" href="#"> <img src="assets/img/dashboard-profile/e-book-blue.svg" width = "20" height = "20" style="fill: #2139f9;" class="me-3"></img> My E-Book</a></li>
    
                <li class="mb-2"><a class="dropdown-item" href="#"> <img src="assets/img/dashboard-profile/logout.svg" alt="" width = "20" height = "20" class="me-3">Logout</a></li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>