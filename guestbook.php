<?php

try{
$bdd = new PDO('mysql:host=localhost;dbname=restaurant2.0;charset=utf8','root','');
} catch(Exception $e){
    die("Erreur : ".$e->getMessage());
}

$motif3 = "guestbook";
$statut = "online";

$requeteGuestbook = $bdd->prepare('SELECT *
                                    FROM messagerie
                                    WHERE motif = ? AND status = ?');
$requeteGuestbook->execute(array($motif3, $statut));


?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="max-age=31536000">
    <title>Restaurant - Pass'-moi une frite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
                      <a class="nav-link text-warning" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning" href="menu.html">Notre carte</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning" href="pictures.html">Album</a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link text-warning" href="restaurant.html">A propos</a>
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

    <div class="container-fluid py-4 d-flex">
        <div class="col-md-12 pb-4 text-center">
            <h2 class="display-4">Livre <span class="text-warning">d'or</span></h2>
        </div>
    </div>

    <section class="container d-flex justify-content-center flex-wrap">
        <?php
            while ($donnees = $requeteGuestbook->fetch()){
                echo '
                    <section class="col-md-5 mx-2 border border-1 rounded bg-warning bg-opacity-10 py-3 px-4 my-2 d-flex">
                        <section class="col-md-2 d-flex justify-content-start align-items-center">
                            <p style="font-size: 5em;" class="text-warning">&laquo;</p>
                        </section>
                        <section class="col-md-8 d-flex justify-content-center align-items-center flex-column">
                            <h6>De '.$donnees['prenom'].' '.$donnees['nom'].'</h6>
                            <p><em>'.$donnees['message'].'</em></p>
                        </section>
                        <section class="col-md-2 d-flex justify-content-end align-items-center">
                            <p style="font-size: 5em;" class="text-warning">&raquo;</p>
                        </section>
                    </section>';
                    }
            ?>
    </section>



</body>
</html>