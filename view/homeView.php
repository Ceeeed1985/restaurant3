<?php
  $title = "Accueil";
  ob_start();
?>


    <section
      class="accueil bg-dark d-flex w-100 h-100 flex-column justify-content-center align-items-center"
    >
      <div
        class="container jumbotron-content bg-dark bg-opacity-75 text-center py-5 d-flex flex-column align-items-center animate__animated animate__zoomIn"
      >
        <h1 class="display-4 text-warning">
          <strong>Pass'moi </strong>une frite !
        </h1>
        <h2 class="text-white">Brasserie & Take Away</h2>
        <hr class="my-4" />
        <p class="text-white">
          Vous avez envie de passer un bon moment en famille ou entre amis ?<br />
          Et peut-être voulez-vous aussi manger de bonnes frites ?<br />
          Le tout dans un cadre atypique et chaleureux ?<br />
          Alors, n'attendez plus :
        </p>
        <a class="btn btn-outline-warning btn-lg border-2" href="#" role="button">Prendre une réservation</a>
      </div>
    </section>


    <div class="container-fluid bg-dark py-2">
        <div class="row text-center">
          <h2 class="text-white display-5">En quelques <span class="text-warning display-5">mots</span></h2>  
        </div>
    </div>

    <div class="container-fluid bg-secondary bg-opacity-25 py-5">
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-sm-12 col-md-4 text-center bg-white p-5 border border-5 border-secondary border-opacity-25">
                    <h3>Le menu</h3>
                    <img src="pictures/menu_01.png" class="w-100" alt="photo_menu" title="Photo d'un menu">
                    <p>Nous vous fournissons une carte simple, il est inutile de
                    s'encombrer de fioriture. <br /><br />
                    Nous mettons les petits plats dans les grands afin de vous
                    préparer les meilleurs plats, avec une promesse : <br /><strong>Il y en aura pour tous les palais.</strong></p>
                    <a class="btn btn-warning" href="menu.html">Vers le menu</a>
                </div>
            <div class="col-sm-12 col-md-4 text-center bg-white p-5 border border-5 border-secondary border-opacity-25">
                <h3>Photos</h3>
                <img src="pictures/photo_01.png" class="w-100" alt="appareil_photo" title="Photo d'un appareil photo">
                <p>Intérieur ou extérieur, le cadre est sompteux. Vous ne nous croyez
              pas ?<br /><br />
              Prenez donc le temps de regarder les photos, et le cadre
              magnifique dans lequel vous viendrez vous ravitailler. Et
              maintenant, intérieur ou extérieur ?</p>
                <a class="btn btn-warning" href="pictures.html">Voir les photos</a>
            </div>
            <div class="col-sm-12 col-md-4 text-center bg-white p-5 border border-5 border-secondary border-opacity-25">
                <h3>La brasserie</h3>
                <img src="pictures/histoire_01.png" class="w-100" alt="photo_histoire" title="Image d'un restaurant">
                <p>C'est à Autreppe, hameau de l'entité Athoise, que nous vous
              accueillons. <br /><br />
              En 2001, Patrick Dupuis décide de restaurer l'ancienne taverne du
              village. Son but : rassembler du monde autour d'un bon repas
              convivial.</p>
                <a class="btn btn-warning" href="restaurant.html">En savoir plus</a>
            </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-dark py-2">
      <div class="row text-center">
        <h2 class="text-white display-5">
          <span class="text-warning h1">«</span> C'est vous qui l'frites
          <span class="text-warning h1">»</span>
        </h2>
        <h4 class="h6 text-white">Parce que leur <span class="text-warning">satisfaction</span>, c'est notre <span class="text-warning">fierté</span>.</h4>

      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
        <div class="row d-flex justify-content-around py-4 px-5">
          <div class="col-sm-12 col-md-3 bg-white border rounded-5 mb-2">
            <div class="row">
              <div class="col-12 text-center p-5">
                <h4 class="h6">
                  <em>"Un moment très agréable en famille"</em>
                </h4>
                <img
                  class="rounded rounded-5"
                  src="pictures/image-daniel.jpg"
                  alt="photo_daniel"
                  title="Photo de Daniel - témoignage"
                />
                <p>
                  <em>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                    fugit voluptate perferendis molestias repudiandae inventore
                    accusantium ipsum dignissimos aliquam necessitatibus iste
                    eveniet nostrum beatae ex deserunt, cumque unde, porro
                    libero?
                  </em>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 bg-white border rounded-5 mb-2">
            <div class="row">
              <div class="col-12 text-center p-5">
                <h4 class="h6">
                  <em>"Un moment très agréable en famille"</em>
                </h4>
                <img
                  class="rounded rounded-5"
                  src="pictures/image-jeanette.jpg"
                  alt="photo_jeanette"
                  title="Photo de Jeanette - témoignage"
                />
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                  fugit voluptate perferendis molestias repudiandae inventore
                  accusantium ipsum dignissimos aliquam necessitatibus iste
                  eveniet nostrum beatae ex deserunt, cumque unde, porro libero?
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 bg-white border rounded-5 mb-2">
            <div class="row">
              <div class="col-12 text-center p-5">
                <h4 class="h6">
                  <em>"Un moment très agréable en famille"</em>
                </h4>
                <img
                  class="rounded rounded-5"
                  src="pictures/image-jonathan.jpg"
                  alt="photo_jonathan"
                  title="Photo de Jonathan - témoignage"
                />
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                  fugit voluptate perferendis molestias repudiandae inventore
                  accusantium ipsum dignissimos aliquam necessitatibus iste
                  eveniet nostrum beatae ex deserunt, cumque unde, porro libero?
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-around py-4 px-5">
          <div class="col-sm-12 col-md-3 bg-white border rounded-5 mb-2">
            <div class="row">
              <div class="col-12 text-center p-5">
                <h4 class="h6">
                  <em>"Un moment très agréable en famille"</em>
                </h4>
                <img
                  class="rounded rounded-5"
                  src="pictures/image-kira.jpg"
                  alt="photo_kira"
                  title="Photo de Kira - témoignage"
                />
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                  fugit voluptate perferendis molestias repudiandae inventore
                  accusantium ipsum dignissimos aliquam necessitatibus iste
                  eveniet nostrum beatae ex deserunt, cumque unde, porro libero?
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 bg-white border rounded-5 mb-2">
            <div class="row">
              <div class="col-12 text-center p-5">
                <h4 class="h6">
                  <em>"Un moment très agréable en famille"</em>
                </h4>
                <img
                  class="rounded rounded-5"
                  src="pictures/image-patrick.jpg"
                  alt="photo_patrick"
                  title="Photo de Patrick - témoignage"
                />
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                  fugit voluptate perferendis molestias repudiandae inventore
                  accusantium ipsum dignissimos aliquam necessitatibus iste
                  eveniet nostrum beatae ex deserunt, cumque unde, porro libero?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php
  $content = ob_get_clean();
  require('base.php');
?>
