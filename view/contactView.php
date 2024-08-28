<?php

  $title = "Contact";
  ob_start();

?>

      <div class="container-fluid  bg-secondary bg-opacity-10 py-2">
        <div class="row text-center">
          <h2 class="text-dark display-5">On garde <span class="text-warning display-5">contact ?</span></h2>  
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form class="row px-5" method='post' action="index.php?page=contact" >
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

<?php
  $content = ob_get_clean();
  require('base.php');

?>