# Restaurant 2.0

## Objectif du projet
Projet BeCode - Réutilisation de l'ancien projet restaurant, pour ajouter du php
Être capable de modifier un projet existant (celui du restaurant, précédemment créé) afin d'intégrer du php.


L'objectif principal est de créer un espace Back Office, afin de faciliter la gestion des éléments du site web, comme :
 - Les réponses aux messages des clients
 - L'ajout de photos, articles, etc.

### Les trois éléments clés à intégrer :
 - Un livre d'or
 - Un interface pour répondre aux messages des clients
 - Une page pour ajouter des photos, et les insérer dans la galerie

## Statut du projet
 - 23/07/2024 : création de la database via phpmyadmin - <p style="color : orange;display:inline;font-weight:bold">In Progress</p>
 - 23/07/2024 : page "manager task" avec appel via javascript - <p style="color : green;display:inline;font-weight:bold">DONE</p>
 - 23/07/2024 : création du projet (draft) - <p style="color : green;display:inline;font-weight:bold">DONE</p>

### Les étapes
 - Création des éléments sur papier - <p style="color : green;display:inline;font-weight:bold">DONE</p>
 - Création de l'espace "Manager" avec les différents onglets (chargement via javascript) - <p style="color : green;display:inline;font-weight:bold">DONE</p>
 - Création de la base de donnée avec phpmyadmin
 - Livre d'or
    - Création de "livre d'or" dans l'espace "Manager"
    - Création d'une page "livre d'or" sur le site web
    - Formulaire à mettre en lien avec la table "livre d'or"
 - Messagerie
    - Modification du formulaire de la page contact du site web
    - Création de "messagerie" dans l'espace "Manager"
    - Formulaire à mettre en lien avec la table "messagerie"
 - Media
    - Modification de la page "Album" du site web
    - Création de "média" dans l'espace "Manager"
    - Création d'un dossier "upload" à la racine du site
    - Formulaire à mettre en lien avec la table "medias"



## La manière dont je conçois le projet

### Création d'un **espace Manager** contenant
 - Un menu sur la gauche contenant les éléments suivants :
    - Dashboard
    - Le livre d'or
    - Messagerie
    - Campagnes
    - Medias
    - Blog
    - Menus

![plan général](/Photo_02.jpg)

### Une page/onglet **Dashboard**
- visualisation du nombre de messages reçus pendant la journée
- visualisation graphique du nombre de visiteurs depuis la création du site
- Si possible, utilisation de **JS Chart** pour obtenir un visuel

### Une page Livre d'Or
- Affichera les nouveaux commentaires à ajouter dans le livre d'or
- Lié directement au formulaire de la page "livre d'or" du site web
- Les variables à utiliser : $nom $prenom $ville $email $message
- Les actions possibles : delete ou approuver le message
    - approuver le message donnera lieu à deux actions :
        - Envoi du message sur la page "livre d'or"
        - Envoi d'un mail au client pour l'informer que son message a été ajouté sur le livre d'or
    
![présentation du livre d'or](/Photo_01.jpg)

### Une page **messagerie**
- Affichera les nouveaux messages des clients
- Lié directement au formulaire de contact de la page "Contact" du site web
- Les variables à utiliser : $nom $prenom $mail $objet $message
    - Si $object = "informations" => le message apparait en jaune dans l'espace Manager
    - Si $object = "plainte" => le message apparait en rouge dans l'espace Manager
- Les actions possibles : delete ou répondre au message
    - si "delete", laisser le message dans la bdd mais retirer le message de l'espace Manager
    - si "répondre", ouvrir une messagerie (gmail, ou autre) + ajouté un message "vous avez répondu au message ce $date"

### Une page **medias**
- Affichera un formulaire avec deux éléments
    - input : le lien vers la photo à uploader
    - button : afin d'uploader la photo
- Lorsque l'on clique sur uploader, cela entrainera 4 actions
    - la photo sera chargée dans un répertoire "uploads", qui aura dès lors un chemin d'accès
    - le nom de la photo et son chemin d'accès seront inséré dans une table de ma base de données
    - la photo sera insérée dans la page "Album" du site web, dans l'espace "galerie"
    - la photo sera également insérée dans la galerie photo de l'espace manager, sous forme de vignette
- Dans l'espace Manager, il y aura également un lien pour accéder à la galerie photo
    - la galerie photo sera composé de vignettes (photos en petite taille)
    - le responsable pourra dès lors cliquer sur un bouton supprimer afin de supprimer les photos qui ne conviennent plus


