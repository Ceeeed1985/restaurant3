<?php

class Manager{

protected function connection(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=restaurant2.0;charset=utf8;', 'root', '');
    }
    catch(Exception $e) {
        throw new Exception('Erreur '.$e->getMessage());
    }

    return $bdd;
}

}