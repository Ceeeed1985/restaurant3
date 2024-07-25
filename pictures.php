<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="max-age=31536000">
    <title>Restaurant - Pass'-moi une frite</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="styles/default.css" />
  </head>

  <body>
    <header class="container-fluid bg-dark py-1">
      <div class="container pt-2">
        <div class="row">
          <a class="col-md-4 col-sm-12" href="index.html">
            <img src="pictures/logo_long_md.png" alt="logo_long" title="logo de Pass'moi une frite"/>
          </a>
          <div class="col-md-8 col-sm-12">
            <nav class="navbar navbar-expand-lg">
              <div class="container">
                <button
                  class="navbar-toggler"
                  data-bs-toggle="collapse"
                  data-bs-target="#menu"
                  title="Appuyer sur ce bouton pour afficher le menu"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning" href="menu.php">Notre carte</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning" href="pictures.php">Album</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning" href="restaurant.php">A propos</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning" href="guestbook.php">Livre d'or</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning active" href="contact.php">Contact</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <div class="container-fluid bg-dark menu-defilant">
      <div class="row bg-dark">
        <p class="text-white my-3 text-center">
          Venez profiter de
          <strong><span class="text-warning">10% de réduction</span></strong>
          sur votre prochaine réservation en ligne, en utilisant le code
          <strong><span class="text-warning">MAYO</span></strong> !
        </p>
      </div>
    </div>

    <div class="container-fluid background-pictures py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-9">
          <div class="container bg-black px-3 pt-4 pb-5 rounded-4">
            <div id="diaporama" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#diaporama"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#diaporama"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#diaporama"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
                <button
                  type="button"
                  data-bs-target="#diaporama"
                  data-bs-slide-to="3"
                  aria-label="Slide 4"
                ></button>
              </div>
              <div class="carousel-inner animate__animated animate__zoomIn">
                <div class="carousel-item active">
                  <div class="container">
                    <div class="row d-flex justify-content-around">
                      <div class="col-md-4">
                        <img
                          src="pictures/pictures_carbonnades.png"
                          alt="carbonnades"
                          title="Photo de carbonnades avec des frites"
                          class="w-100"
                        />
                      </div>
                      <div class="col-md-4">
                        <img
                          src="pictures/pictures_burger.jpg"
                          alt="image_burger"
                          title="Photo d'un hamburger avec des frites"
                          class="w-100"
                        />
                      </div>
                      <div class="col-md-4">
                        <img
                          src="pictures/pictures_americain.jpg"
                          alt="image_americain"
                          title="Photo d'un américain avec des frites"
                          class="w-100"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="container">
                    <div class="row d-flex justify-content-around">
                      <div class="col-md-4">
                        <img
                          src="pictures/pictures_moules.jpg"
                          alt="image_moules"
                          title="Photo d'une cassolette de moules avec des frites"
                          class="w-100"
                        />
                      </div>
                      <div class="col-md-4">
                        <img
                          src="pictures/pictures_poulet.jpeg"
                          alt="image_poulet"
                          title="Photo d'un poulet avec des frites"
                          class="w-100"
                        />
                      </div>
                      <div class="col-md-4">
                        <img
                          src="pictures/pictures_steak.jpg"
                          alt="image_steak"
                          title="Photo d'un steak avec des frites"
                          class="w-100"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="container">
                    <div class="row d-flex justify-content-around">
                      <div class="col-md-4">
                        <img
                          src="pictures/pictures_carbonnades.png"
                          alt="image_carbonnades"
                          title="Photos de carbonnades avec des frites"
                          class="w-100"
                        />
                      </div>
                      <div class="col-md-4">
                        <img
                          src="pictures/pictures_burger.jpg"
                          alt="image_burger"
                          title="Photo d'un hamburger avec des frites"
                          class="w-100"
                        />
                      </div>
                      <div class="col-md-4">
                        <img
                          src="pictures/pictures_americain.jpg"
                          alt="image_americain"
                          title="Photo d'un américain avec des frites"
                          class="w-100"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="container">
                    <div class="row d-flex justify-content-around">
                      <div class="col-md-4">
                        <img
                          src="pictures/pictures_moules.jpg"
                          alt="image_moules"
                          title="Photo d'un cassolette de moules avec des frites"
                          class="w-100"
                        />
                      </div>
                      <div class="col-md-4">
                        <img
                          src="pictures/pictures_poulet.jpeg"
                          alt="image_poulet"
                          title="Photo d'un poulet avec des frites"
                          class="w-100"
                        />
                      </div>
                      <div class="col-md-4">
                        <img
                          src="pictures/pictures_steak.jpg"
                          alt="image_steak"
                          title="Photo d'un steak avec des frites"
                          class="w-100"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button
                class="carousel-control-prev prev"
                type="button"
                data-bs-target="#diaporama"
                data-bs-slide="prev"
                title="Faire défiler vers la gauche"
              >
                <span class="carousel-control-prev-icon"></span>
              </button>
              <button
                class="carousel-control-next next"
                type="button"
                data-bs-target="#diaporama"
                data-bs-slide="next"
                title="Faire défiler vers la droite"
              >
                <span class="carousel-control-next-icon"></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-dark pt-2 pb-1">
      <div class="row text-center">
        <h6 class="text-white">
          Cédric Truyen <span class="text-warning">&copy; BeCode Brussels</span>
        </h6>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
