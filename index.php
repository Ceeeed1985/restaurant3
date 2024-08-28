<?php

    require('controller/controller.php');

    try {
      if(isset($_GET['page'])){
        if($_GET['page'] == 'contact'){
          getContactView();
        } else {
          throw new Exception ("Cette page n'existe pas ou a été supprimée");
        }
      } else {
        getContactView();
      }
    } catch (Exception $e) {
        $error = $e->getmessage();
      }