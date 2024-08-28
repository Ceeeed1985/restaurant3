<?php

require_once('Manager.php');


class MessagesManager extends Manager{
    

    public function postMessage() {
    
        $bdd = $this->connection();

    $requete = $bdd -> prepare('INSERT INTO messagerie (prenom,nom,email,motif,message,status)
								VALUES (?,?,?,?,?,?)');

    $requete->execute(array($firstname,$lastname,$email,$motif,$message,$status));

return $requete;

}

}
?>

