<?php

    require('model/contactModel.php');
    require('model/guestbookModel.php');

    function getContactView() {
        $requete = postMessage();
        require('view/contactView.php');
    }

    function getGuestbookView() {
        $requeteGuestbook = getGuestMessages();
        require('view/guestbookView.php');
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