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

    <div class="container-fluid py-4 background-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 pb-4 text-center">
            <h2 class="display-4">Nos <span class="text-warning">menus</span></h2>
          </div>
          <div class="container text-center">
            <div class="row d-flex justify-content-around">
                <!-- Menu 1 -->
              <div class="col-md-3 bg-white p-0 mb-4">
                <h3 class="py-3 mb-0 text-center text-white bg-dark">Le menu <span class="text-warning">« Tradition »</span></h3>
                <img src="pictures/steak.jpg" alt="steak-frites" title="Photo d'un steak avec des frites" class="w-100"/>
                <div class="row px-5 pt-4">
                    <h4 class="h5">Apéritif</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Entrée</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p>ou</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Plat</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Déssert</h4>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
              </div>

              <!-- Menu 2 -->
              <div class="col-md-3 bg-white p-0 mb-4">
                <h3 class="py-3 mb-0 text-center text-white bg-dark">A'l bonne <span class="text-warning">franquette</span></h3>
                <img src="pictures/carbonnade.png" alt="carbonnade" title="Photo de carbonnades avec des frites" class="w-100"/>
                <div class="row px-5 pt-4">
                    <h4 class="h5">Apéritif</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Entrée</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p>ou</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Plat</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Déssert</h4>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
              </div>

              <!-- Menu 3 -->
              <div class="col-md-3 bg-white p-0 mb-4">
                <h3 class="py-3 mb-0 text-center text-white bg-dark">Le menu du <span class="text-warning">Dimanche</span></h3>
                <img src="pictures/poulet.jpeg" alt="poulet-frites" title="Photo d'un poulet avec des frites" class="w-100"/>
                <div class="row px-5 pt-4">
                    <h4 class="h5">Apéritif</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Entrée</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p>ou</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Plat</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Déssert</h4>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
              </div>
          </div>

            <div class="row d-flex justify-content-around pt-5">
                <!-- Menu 4 -->
              <div class="col-md-3 bg-white p-0 mb-4">
                <h3 class="py-3 mb-0 text-center text-white bg-dark">Le menu <span class="text-warning">« De Zee »</span></h3>
                <img src="pictures/moules.png" alt="moules-frites" title="Photo d'un cassolette de moules avec des frites" class="w-100"/>
                <div class="row px-5 pt-4">
                    <h4 class="h5">Apéritif</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Entrée</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p>ou</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Plat</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Déssert</h4>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
              </div>

              <!-- Menu 5 -->
              <div class="col-md-3 bg-white p-0 mb-4">
                <h3 class="py-3 mb-0 text-center text-white bg-dark">L'Americano-<span class="text-warning">Belge</span></h3>
                <img src="pictures/hamburger.jpeg" alt="hamburger-frites" title="Photo d'un hamburger avec des frites" class="w-100"/>
                <div class="row px-5 pt-4">
                    <h4 class="h5">Apéritif</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Entrée</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p>ou</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Plat</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <hr>
                </div>
                <div class="row px-5">
                    <h4 class="h5">Déssert</h4>
                    <p>Lorem ipsum dolor sit.</p>
                </div>
              </div>

              <!-- La carte -->
              <div class="col-md-3 bg-white p-0 pb-3 mb-4">
                <h3 class="py-3 mb-0 text-center">C'est <span class="text-warning">tout ?</span></h3>
                <img src="pictures/menu_02.png" alt="image-menu" title="Image d'un menu de restaurant" class="w-100"/>
                <div class="row px-5 pt-4">
                    <h4 class="h5">Non évidemment !</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit tempora laborum fugiat omnis ad corrupti.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet suscipit quos odio ratione quod eos temporibus voluptas eveniet fuga veniam!</p>
                    <p>Alors si vous souhaitez voir notre carte complète, cliquez sur le bouton ci-dessous</p>
                    <hr>
                    <div class="contenair">
                        <div class="row d-flex justify-content-around">
                            <div class="col-md-10">
                                <a href="#" class="btn btn-warning">Le menu complet</a>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
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
