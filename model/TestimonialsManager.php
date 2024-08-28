<?php

require_once('Manager.php');

class TestimonialsManager extends Manager{
    
    public function getGuestMessages(){

        $bdd = $this->connection();

        $motif3 = "guestbook";
        $statut = "online";

        $requeteGuestbook = $bdd->prepare('SELECT *
                                        FROM messagerie
                                        WHERE motif = ? AND status = ?');
        $requeteGuestbook->execute(array($motif3, $statut));

        return $requeteGuestbook; 

    }

   public function postTestimonial($firstname,$lastname,$email,$motif,$message,$status){
    $bdd = $this->connection();

    $motif3 = "guestbook";
    $statut = "online";

    $requete = $bdd->prepare('INSERT INTO *
                                        FROM messagerie
                                        WHERE motif = ? AND status = ?');
    $result = $requete->execute(array($firstname,$lastname,$email,$motif,$message,$status));

    return $result;

   }

}