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
          <div class="col-md-8 sm-12">
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

    <div class="container py-5">
      <div class="row">
        <div class="col-md-4 col-ms-12 text-center animate__animated animate__slideInLeft">
          <img
            src="https://raw.githubusercontent.com/Ceeeed1985/restaurant-css-framework/main/pictures/chef_carre_02.jpg"
            alt="photo_chef"
            title="Photo du Chef Patrick Dupuis"
            class="w-100 mb-4"
          />
        </div>
        <div class="col-md-8 col-ms-12 px-5 animate__animated animate__slideInRight">
          <h3 class="display-5">Patrick Dupuis</h3>
          <h4 class="h4">Pour l'amour de la frite</h4>
          <p>
            Patrick Dupuis, chef cuisinier passionné, est le fondateur et la
            force créative derrière le restaurant "Pass'moi une frite".
            Originaire de Ath, Patrick a cultivé son amour pour la cuisine dès
            son plus jeune âge. Après avoir perfectionné son art dans plusieurs
            établissements étoilés, il réalise son rêve en ouvrant son propre
            restaurant. <br /><br />
            "Pass'moi une frite" est le fruit de l'ambition de Patrick de
            réinventer la frite traditionnelle en y ajoutant une touche
            gastronomique unique. Chaque plat est préparé avec des ingrédients
            locaux et frais, reflétant son engagement envers la qualité.
            <br /><br />
            Chez "Pass'moi une frite", l'ambiance conviviale et chaleureuse
            invite à savourer chaque moment. Patrick et son équipe mettent un
            point d'honneur à offrir une expérience culinaire exceptionnelle, où
            chaque visiteur se sent comme chez lui. Venez découvrir le talent de
            Patrick Dupuis et laissez-vous surprendre par ses délicieuses
            interprétations de la frite, célébrées comme une véritable œuvre
            d'art culinaire.
          </p>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-secondary bg-opacity-10 py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center">
            <h3 class="display-5 pb-3">
              Où nous <span class="text-warning">trouver ?</span>
            </h3>
            <div class="map-container px-4 pt-4 pb-5 mb-4 bg-black rounded-4">
              <iframe
                src="https://www.google.com/maps/d/embed?mid=18ZF_iArQg1uHvCV-macV-zT86bJa5A8&ehbc=2E312F"
                class="w-100"
                width="640"
                height="480"
                frameborder="0"
                title="accessible iframe"
              ></iframe>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <h3 class="display-5 pb-3">
              Nos <span class="text-warning">infos ?</span>
            </h3>
            <div class="container text-start">
              <div class="row align-items-start">
                <div class="col-md-3 text-center">
                  <img src="pictures/icone_location.png" alt="icone_location" title="Icone location / lieux" />
                </div>
                <div class="col-md-9">
                  <p class="m-0">Pass'moi une frite SARL</p>
                  <p>7802 Autreppe (ATH), rue du Renard 11</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 text-center">
                  <img src="pictures/icone_android.png" alt="icone_android" title="Icone d'un téléphone portable" />
                </div>
                <div class="col-md-9">
                  <p>+32 478 46 53 73</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 text-center">
                  <img src="pictures/icone_phone.png" alt="icone_phone" title="Icone d'un téléphone fixe" />
                </div>
                <div class="col-md-9">
                  <p>+32 68 33 30 01</p>
                </div>
              </div>
              <div class="row pb-4">
                <div class="col-md-3 text-center">
                  <img src="pictures/icone_mail.png" alt="icone_mail" title="Icone d'un email / enveloppe" />
                </div>
                <div class="col-md-9">
                  <p>passmoiunefrite@patate.com</p>
                </div>
              </div>
              <hr />
              <div class="row pt-4">
                <div class="col-md-3 text-center">
                  <img src="pictures/icone_horaire.png" alt="icone_horaire" title="Icone d'un calendrier"/>
                </div>
                <div class="col-md-9">
                  <h5 class="pb-2">Horaires d'ouvertures</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <p class="mb-1"><strong>Lundi</strong></p>
                </div>
                <div class="col-md-9"><p class="mb-1">Fermé</p></div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <p class="mb-1"><strong>Mardi</strong></p>
                </div>
                <div class="col-md-9">
                  <p class="mb-1">De 18:00 à 21:30</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <p class="mb-1"><strong>Mercredi</strong></p>
                </div>
                <div class="col-md-9">
                  <p class="mb-1">De 11:30 à 14:00 & de 18:00 à 21:30</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <p class="mb-1"><strong>Jeudi</strong></p>
                </div>
                <div class="col-md-9">
                  <p class="mb-1">De 11:30 à 14:00 & de 18:00 à 21:30</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <p class="mb-1"><strong>Vendredi</strong></p>
                </div>
                <div class="col-md-9">
                  <p class="mb-1">De 11:30 à 14:00 & de 18:00 à 21:30</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <p class="mb-1"><strong>Samedi</strong></p>
                </div>
                <div class="col-md-9">
                  <p class="mb-1">De 11:30 à 14:00 & de 18:00 à 21:30</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <p class="mb-1"><strong>Dimanche</strong></p>
                </div>
                <div class="col-md-9">
                  <p class="mb-1">De 11:30 à 14:00 & de 18:00 à 21:30</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-dark text-white text-center py-3">
      <div class="container">
        <div class="row">
          <h2 class="col-md-12">
            Venez nous <span class="text-warning">rejoindre</span>
          </h2>
          <p class="col-md-12 p-0 m-0">
            Nous sommes présents sur les réseaux sociaux
          </p>
        </div>
      </div>
    </div>
    <div class="container py-5">
      <div class="row d-flex justify-content-around">
        <a href="https://www.facebook.com/" class="col-md-2">
          <img
            class="w-100 py-3 logo_anime_facebook"
            src="pictures/logo_facebook.png"
            alt="logo_facebook"
            title="Logo Facebook"
          />
        </a>
        <a href="https://www.instagram.com/" class="col-md-2">
          <img
            class="w-100 py-3 logo_anime_instagram"
            src="pictures/logo_instagram.png"
            alt="logo_instagram"
            title="Logo Instagram"
          />
        </a>
        <a href="https://www.thefork.be/" class="col-md-2">
          <img
            class="w-100 py-3 logo_anime_fork"
            src="pictures/logo_fork.png"
            alt="logo_fork"
            title="Logo de The Fork"
          />
        </a>
        <a href="https://www.linkedin.com/" class="col-md-2">
          <img
            class="w-100 py-3 logo_anime_linkedin"
            src="pictures/logo_linkedin.png"
            alt="logo_linkedin"
            title="Logo de Linkedin"
          />
        </a>
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
