<?php

require_once('Manager.php');


class MessagesManager extends Manager{
    

    public function postMessage() {
    
        $bdd = $this->connection();

    // mes variables
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
    $motif = htmlspecialchars($_POST['motif']);
    }


    $requete = $bdd -> prepare('INSERT INTO messagerie (prenom,nom,email,motif,message,status)
								VALUES (?,?,?,?,?,?)');

    $requete->execute(array($firstname,$lastname,$email,$motif,$message,$status));

return $requete;

}

}
?>

