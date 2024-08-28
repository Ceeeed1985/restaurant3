<?php
  $title = "Livre d'or";
  ob_start();
?>

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


<?php
  $content = ob_get_clean();
  require('base.php');
?>