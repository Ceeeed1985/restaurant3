<?php

    require('controller/controller.php');

    try {

      if(isset($_GET['page'])){
        
        if($_GET['page'] == 'contact'){

            
            $status = 'online';

            if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['motif'])) {
            addTestimonial(htmlspecialchars($_POST['firstname']), htmlspecialchars($_POST['lastname']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['message']), htmlspecialchars($_POST['motif']));
            }
            else {
              getContactView();
            }
           
            

        } else if($_GET['page'] == 'guestbook'){
          getGuestbookView();
        } else if($_GET['page'] == 'home'){
          getHomeView();
        } else if($_GET['page'] == 'menu'){
          getMenuView();
        } else if($_GET['page'] == 'pictures'){
          getpicturesView();
        } else if($_GET['page'] == 'restaurant'){
          getrestaurantView();
        } else if($_GET['page'] == 'manager'){
          getManagerView();
        } else {
          throw new Exception ("Cette page n'existe pas ou a été supprimée");
        }
      } else {
        getHomeView();
      }
    } catch (Exception $e) {
        $error = $e->getmessage();
      }