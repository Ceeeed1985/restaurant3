<?php

    function getGuestMessages(){
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=restaurant2.0;charset=utf8','root','');
        }
        catch(Exception $e){
            die("Erreur : ".$e->getMessage());
        }

        $motif3 = "guestbook";
        $statut = "online";

        $requeteGuestbook = $bdd->prepare('SELECT *
                                            FROM messagerie
                                            WHERE motif = ? AND status = ?');
        $requeteGuestbook->execute(array($motif3, $statut));

        return $requeteGuestbook;

    }
