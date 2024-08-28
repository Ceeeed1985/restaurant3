<?php

    require_once('model/MessagesManager.php');
    require_once('model/TestimonialsManager.php');

    function getContactView() {
        $messageManager = new MessagesManager();
        $requete = $messageManager->postMessage();
        require('view/contactView.php');
    }

    function getGuestbookView() {
        $testimonialManager = new TestimonialsManager();
        $requeteGuestbook = $testimonialManager->getGuestMessages();
        require('view/guestbookView.php');
    }

    function addTestimonial() {
        $testimonialManager = new TestimonialsManager();
        $result = $testimonialManager->postTestimonial($prenom, $nom, $email, $message, $motif);

        if($result === false){
            throw new Exception ("impossible d'ajouter votre avis pour le moment");
        } else {
            header('location: index.php?page=guestbook');
            exit();
        }
    }


    function getHomeView() {
        require('view/homeView.php');
    }

    function getManagerView() {
        require('view/managerView.php');
    }

    function getMenuView() {
        require('view/menuView.php');
    }

    function getPicturesView() {
        require('view/picturesView.php');
    }

    function getRestaurantView() {
        require('view/restaurantView.php');
    }