<?php

// CONNEXION A LA DATABASE RESTAURANT2.0

try{
$bdd = new PDO('mysql:host=localhost;dbname=restaurant2.0;charset=utf8','root','');
} catch(Exception $e){
    die("Erreur : ".$e->getMessage());
}

$motif1 = "plaintes";
$motif2 = "infos";
$motif3 = "guestbook";
$statut = "online";
$nomImage = '';
$extensionImage = '';
$adressImage = '';


$requeteMessagerie = $bdd->prepare('SELECT *
                            FROM messagerie
                            WHERE (motif = ? OR motif = ?) AND (status = ?)');

$requeteMessagerie->execute(array($motif1, $motif2, $statut));

$requeteGuestbook = $bdd->prepare('SELECT *
                                    FROM messagerie
                                    WHERE motif = ? AND status = ?');
$requeteGuestbook->execute(array($motif3, $statut));


// GENERER MA GALERIE D'IMAGES

if (isset($_POST['upload_image']) && isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $error = 1;

    if ($_FILES['image']['size'] <= 3000000) {
        $informationsImage = pathinfo($_FILES['image']['name']);
        $extensionImage = $informationsImage['extension'];
        $extensionsArray = array('jpeg', 'jpg', 'gif', 'png');

        if (in_array($extensionImage, $extensionsArray)) {
            $nomImage = 'uploads/' . time() . rand() . rand() . '.' . $extensionImage;
            move_uploaded_file($_FILES['image']['tmp_name'], $nomImage);
            $adressImage = 'http://localhost/restaurant2.0/' . $nomImage;
            $error = 0;

            $requeteGalerie = $bdd->prepare('INSERT INTO images (nom_image, extension_image, adress_image)
                                    VALUES (?, ?, ?)');
            $requeteGalerie->execute(array($nomImage, $extensionImage, $adressImage));
        }
    }
}

$requeteGalerieAffichage = $bdd->query('SELECT * FROM images');

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=31536000">
    <title>Restaurant - Pass'-moi une frite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="styles/default.css">
</head>
<body>
    <header class="container-fluid bg-dark bg-opacity-90 py-4 mb-5">
        <section class="container bg-dark text-warning text-center">
            <h1>TASK Manager</h1>
        </section>
    </header>
    <section class="container-fluid">
        <section class="container border border-2 border-secondary rounded">
            <section class="row d-flex justify-content-around my-4">
                <section class="menu col-md-12">
                    <section class="tab d-flex justify-content-around" role="tablist">
                        <ul class="nav nav-tabs d-flex flex-column col-md-3">
                            <li class="nav-item mx-1">
                                <a class="btn btn-dark btn-lg border-2 m-1 w-100 active" role="tab" id="monTaskManager-tab" data-bs-toggle="tab" href="#sectionMonTaskManager" aria-controls="monTaskManager" aria-selected="true">Task Manager</a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="btn btn-primary btn-lg border-2 m-1 w-100" role="tab" id="dashboard-tab" data-bs-toggle="tab" href="#sectionDashboard" aria-controls="dashboard" aria-selected="false">Dashboard</a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="btn btn-danger btn-lg border-2 m-1 w-100" role="tab" id="messagerie-tab" data-bs-toggle="tab" href="#sectionMessagerie" aria-controls="messagerie" aria-selected="false">Messagerie</a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="btn btn-warning btn-lg border-2 m-1 w-100" role="tab" id="guestbook-tab" data-bs-toggle="tab" href="#sectionGuestbook" aria-controls="guestbook" aria-selected="false">Livre d'or</a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="btn btn-success btn-lg border-2 m-1 w-100" role="tab" id="medias-tab" data-bs-toggle="tab" href="#sectionMedias" aria-controls="medias" aria-selected="false">Médias</a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="btn btn-info btn-lg border-2 m-1 w-100" role="tab" id="campagnes-tab" data-bs-toggle="tab" href="#sectionCampagnes" aria-controls="campagnes" aria-selected="false">Campagnes</a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="btn btn-secondary btn-lg border-2 m-1 w-100" role="tab" id="blog-tab" data-bs-toggle="tab" href="#sectionBlog" aria-controls="blog" aria-selected="false">Blog</a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="btn btn-outline-secondary btn-lg border-2 m-1 w-100" role="tab" id="menus-tab" data-bs-toggle="tab" href="#sectionMenus" aria-controls="menus" aria-selected="false">Menus</a>
                            </li>
                        </ul>
                        <section class="tab-content col-md-8">
                            <section class="tab-pane fade show active" id="sectionMonTaskManager" role="tabpanel" aria-labelledby="monTaskManager-tab">
                                <h2 class="text-dark">Bienvenue sur l'espace Manager</h2>
                                <img src="pictures/image_task_manager.png" class="float-start me-3" alt="Image flottante à gauche">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit quod ratione maiores aliquid pariatur, dolorem distinctio voluptates ut tempore consequatur sequi velit ipsum aliquam eos, natus reprehenderit consequuntur similique modi.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolor aliquam possimus praesentium consectetur modi eveniet. Ratione alias deserunt fugit sint ad. Doloribus, eligendi ea impedit culpa vero repellendus quibusdam enim voluptate voluptatem, veniam repellat odio molestias maxime quod! Eum error ducimus, provident, sapiente ea quam molestias minima magni ipsum ad culpa sit temporibus doloribus! Nobis esse rerum reprehenderit, exercitationem sed quaerat explicabo modi mollitia perspiciatis, eveniet eligendi ea dignissimos repudiandae nemo eius totam necessitatibus?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quis dolorem quo est magni laborum provident illo nobis optio sequi. Aperiam illo facilis commodi amet placeat, ex modi ea perferendis cumque mollitia hic eum ut voluptas architecto porro voluptates pariatur.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, magnam.</p>
                            </section>
                            <section class="tab-pane fade" id="sectionDashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <h2 class="text-primary">Bienvenue sur le dashboard</h2>
                            </section>
                            <section class="tab-pane fade" id="sectionMessagerie" role="tabpanel" aria-labelledby="messagerie-tab">
                                <?php
                                while ($donnees = $requeteMessagerie->fetch()){
                                    if($donnees['motif'] == "plaintes"){
                                        echo '
                                        <section class="container border border-1 rounded bg-danger bg-opacity-10 py-3 px-4 my-2">
                                            <section class="row">
                                                <section class="col-md-1 text-center">
                                                    <h6>Motif</h6>
                                                    <p>'.$donnees['motif'].'</p>
                                                </section>
                                                <section class="col-md-3 text-center">
                                                    <h6>Prénom</h6>
                                                    <p>'.$donnees['prenom'].'</p>
                                                </section>
                                                <section class="col-md-3 text-center">
                                                  <h6>Nom</h6>
                                                    <p>'.$donnees['nom'].'</p>
                                              </section>
                                             <section class="col-md-5 text-center">
                                                  <h6>Mail</h6>
                                                  <p>'.$donnees['email'].'</p>
                                             </section>
                                         </section>
                                         <section class="row">
                                                <h6>Message</h6>
                                                <p>'.$donnees['message'].'</p>
                                            </section>
                                            <button class="btn btn-success">Répondre</button>
                                            <button class="btn btn-danger">Effacer</button>
                                     </section>';
                                        } else {
                                            echo '
                                            <section class="container border border-1 rounded bg-primary bg-opacity-10 py-3 px-4 my-2">
                                                <section class="row">
                                                    <section class="col-md-1 text-center">
                                                        <h6>Motif</h6>
                                                        <p>'.$donnees['motif'].'</p>
                                                    </section>
                                                    <section class="col-md-3 text-center">
                                                        <h6>Prénom</h6>
                                                        <p>'.$donnees['prenom'].'</p>
                                                    </section>
                                                    <section class="col-md-3 text-center">
                                                      <h6>Nom</h6>
                                                        <p>'.$donnees['nom'].'</p>
                                                  </section>
                                                 <section class="col-md-5 text-center">
                                                      <h6>Mail</h6>
                                                      <p>'.$donnees['email'].'</p>
                                                 </section>
                                             </section>
                                             <section class="row">
                                                    <h6>Message</h6>
                                                    <p>'.$donnees['message'].'</p>
                                                </section>
                                                <button class="btn btn-success">Répondre</button>
                                                <button class="btn btn-danger">Effacer</button>
                                         </section>';  
                                        }
                                    }
                                    ?>
                            </section>
                            <section class="tab-pane fade" id="sectionGuestbook" role="tabpanel" aria-labelledby="guestbook-tab">
                                <h2 class="text-warning">Bienvenue sur votre gestionnaire du livre d'or</h2>
                                <?php
                                while ($donnees = $requeteGuestbook->fetch()){
                                        echo '
                                        <section class="container border border-1 rounded bg-warning bg-opacity-10 py-3 px-4 my-2">
                                            <section class="row">
                                                <section class="col-md-4">
                                                    <h5>Prénom</h5>
                                                    <p>'.$donnees['prenom'].'</p>
                                                </section>
                                                <section class="col-md-4">
                                                  <h5>Nom</h5>
                                                    <p>'.$donnees['nom'].'</p>
                                              </section>
                                             <section class="col-md-4">
                                                  <h5>Mail</h5>
                                                  <p>'.$donnees['email'].'</p>
                                             </section>
                                         </section>
                                         <section class="row">
                                                <h5>Message</h5>
                                                <p>'.$donnees['message'].'</p>
                                            </section>
                                            <button class="btn btn-success">Publier</button>
                                            <button class="btn btn-danger">Effacer</button>
                                     </section>';
                                        }
                                    ?>
                            </section>
                            <section class="tab-pane fade" id="sectionMedias" role="tabpanel" aria-labelledby="medias-tab">
                                <section class="container border border-1 rounded bg-light pt-3 px-3">
                                    <form action="manager.php" method="post" enctype="multipart/form-data">
                                        <p class="d-flex justify-content-between align-items-center">
                                            <input type="file" name="image" required>
                                            <button class="btn btn-primary" name="upload_image">Uploader</button>
                                        </p>
                                    </form>    
                                </section>
                                <section class="container border border-1 rounded bg-light mt-3 pt-3 px-3 d-flex flex-wrap">
                                   
                                    <?php
                                        while ($donneesImage = $requeteGalerieAffichage->fetch()) {
                                            echo '
                                            <section class="col-md-4 mb-3 p-2">
                                                <section class="card">
                                                    <div class="image-container">
                                                        <img src="' . $donneesImage['adress_image'] . '" class="card-img-top" alt="' . $donneesImage['nom_image'] . '">
                                                    </div>
                                                    <section class="card-body">
                                                        <button class="btn btn-success">Publier</button>
                                                        <button class="btn btn-danger">Effacer</button>
                                                    </section>
                                                </section>
                                            </section>';
                                        }
                                        ?>

                                </section>
                            </section>
                            <section class="tab-pane fade" id="sectionCampagnes" role="tabpanel" aria-labelledby="campagnes-tab">
                                <h2 class="text-info">Bienvenue sur votre gestionnaire de campagnes et prompotions</h2>
                            </section>
                            <section class="tab-pane fade" id="sectionBlog" role="tabpanel" aria-labelledby="blog-tab">
                                <h2 class="text-secondary">Prêt à créer de nouveaux articles ?</h2>
                            </section>
                            <section class="tab-pane fade" id="sectionMenus" role="tabpanel" aria-labelledby="menus-tab">
                                <h2 class="text-dark">Un nouveau menu à la carte ? C'est par ici que ça se passe !</h2>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
