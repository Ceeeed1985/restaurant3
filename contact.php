<?php

// CONNECTION A LA DATABASE RESTAURANT2.0
try{
  $bdd = new PDO('mysql:host=localhost;dbname=restaurant2.0;charset=utf8;', 'root', '');
} catch(Exception $e){
  die ('Erreur '.$e->getMessage());
}


$firstname = '';
$lastname = '';
$email = '';
$message = '';
$motif = '';
$status = 'online';


if(isset($_POST['firstname'])){
  $firstname = htmlspecialchars($_POST['firstname']);
}
if(isset($_POST['lastname'])){
  $lastname = htmlspecialchars($_POST['lastname']);
}
if(isset($_POST['email'])){
  $email = htmlspecialchars($_POST['email']);
}
if(isset($_POST['message'])){
  $message = htmlspecialchars($_POST['message']);
}

if (isset($_POST['motif'])) {
  $motif = htmlspecialchars($_POST['motif']);}


$requete = $bdd -> prepare('INSERT INTO messagerie (prenom,nom,email,motif,message,status)
												        VALUES (?,?,?,?,?,?)');

$requete->execute(array($firstname,$lastname,$email,$motif,$message,$status));

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

      <div class="container-fluid  bg-secondary bg-opacity-10 py-2">
        <div class="row text-center">
          <h2 class="text-dark display-5">On garde <span class="text-warning display-5">contact ?</span></h2>  
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form class="row px-5" method='post' action="contact.php" >
                        <div class="col-md-6 col-sm-12 animate__animated animate__slideInLeft">
                            <label class="form-label" for="firstname">Votre prénom</label>
                            <input class="form-control" type="text" name="firstname" id="firstname">
                        </div>
                        <div class="col-md-6 col-sm-12 animate__animated animate__slideInRight">
                            <label class="form-label" for="lastname">Votre nom</label>
                            <input class="form-control" type="text" name="lastname" id="lastname">
                        </div>
                        <div class="col-md-12 mt-2 animate__animated animate__slideInUp">
                            <label class="form-label" for="lastname">Votre adresse email principale</label>
                            <input class="form-control" type="email" name="email" id="email" title="Entrez votre adresse email">
                        </div>
                        <div class="col-md-12 animate__animated animate__slideInUp">
                          <select id="motif" name="motif" class="form-select col-md-12 my-4" aria-label="Default select example">
                              <option selected value="">Je souhaite</option>
                              <option value="infos">Obtenir des informations</option>
                              <option value="plaintes">Formuler une plainte</option>
                              <option value="guestbook">Publier dans le livre d'or</option>
                          </select>
                        </div>
                        <div class="col-md-12 animate__animated animate__slideInUp">
                            <label class="form-label" for="message">Votre message</label>
                            <textarea class="form-control" type="message" name="message" id="message" cols="30" rows="8"></textarea>
                        </div>
                        <div class="col-md-12 text-end mt-4 animate__animated animate__slideInUp">
                            <button class="btn btn-warning" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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