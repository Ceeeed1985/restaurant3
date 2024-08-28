<?php

    require('model/contactModel.php');

    function getContactView() {
        $requete = postMessage();
        require('view/contactView.php');
    }