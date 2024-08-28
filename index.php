<?php

    require('controller/controller.php');

    try {

      if(isset($_GET['page'])){
        
        if($_GET['page'] == 'contact'){
          getContactView();
        } else if($_GET['page'] == 'guestbook'){
          getGuestbookView();
        } else if($_GET['page'] == 'home'){
          getHomeView();
        } else {
          throw new Exception ("Cette page n'existe pas ou a été supprimée");
        }
      } else {
        getHomeView();
      }
    } catch (Exception $e) {
        $error = $e->getmessage();
      }