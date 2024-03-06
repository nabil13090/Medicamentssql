<div class="banniere rounded rounded">
  <div class="nav_container w-90 m-auto fw-normal text-uppercase">
    <nav class="navbar navbar-expand-xl w-100 pt-0">
      <div class="container-fluid">
        <a class="navbar-brand m-0 p-0" href="index.php" aria-current="page">
          <picture>
            <img class="logo" height="50px" width="50px" src="assets/logo1.png" alt="gonzo">
          </picture>
        </a>
        <button class="navbar-toggler bg-white " type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body justify-content-around">
            <ul class="navbar-nav d-flex align-items-center">
              <li class="nav-item">
                <a class="nav-link px-4 text-nowrap text-white display-2 btn btn-outline-info mt-auto border border-white me-5 bg-dark " href="<?= BASE_URL ?>">ACCUEIL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4 text-nowrap text-white display-2 btn btn-outline-info mt-auto border border-white me-5 bg-dark" href="<?= BASE_URL ?>produits.php">PRODUITS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4 text-nowrap text-white display-2 btn btn-outline-info mt-auto border border-white me-5 bg-dark" href="<?= BASE_URL ?>cliniques.php">CLINIQUES</a>
              </li>
              <li class="nav-item"><a class="nav-link px-4 text-white text-nowrap display-2 btn btn-outline-info mt-auto border border-white me-5 bg-dark" href="<?= BASE_URL ?>contact.php">Contact</a></li>
              <button class="btn btn-outline-dark d-xl-none d-block" type="submit">
              <i class="bi-cart-fill me-1">PANIER</i>
              <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
              </button>
            </ul>
          </div>
        </div>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <div class="me-3" id="time"></div>
        <a class="text-decoration-none mx-2 " href="shop.php">
        <button class="btn btn-outline-dark d-none d-xl-block" type="submit">
            <i class="bi-cart-fill me-1 "></i>
            PANIER
            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
        </button>
        </a>
      </nav>
    </div>
  </div>
</div>