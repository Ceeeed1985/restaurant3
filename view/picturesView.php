<?php
  $title = "Photos";
  ob_start();
?>

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


<?php
  $content = ob_get_clean();
  require('base.php');
?>
