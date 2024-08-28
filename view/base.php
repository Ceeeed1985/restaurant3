<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="max-age=31536000">
    <title>Pass'-moi une frite | <?= $title ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="public/styles/default.css" />
  </head>

  <body>
    <header class="container-fluid bg-dark py-1">
      <div class="container pt-2">
        <div class="row">
          <a class="col-md-4 col-sm-12" href="index.html">
            <img src="public/pictures/logo_long_md.png" alt="logo_long" title="logo de Pass'moi une frite"/>
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
                      <a class="nav-link text-warning" href="./view/homeView.php">Accueil</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning" href="menuView.php">Notre carte</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning" href="picturesView.php">Album</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning" href="restaurantView.php">A propos</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning" href="guestbookView.php">Livre d'or</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning active" href="contactView.php">Contact</a>
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

      <?= $content ?>


    <div class="container-fluid bg-dark pt-2 pb-1">
        <div class="row text-center">
            <h6 class="text-white">Cédric Truyen <span class="text-warning">&copy; BeCode Brussels</span></h6>  
        </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>