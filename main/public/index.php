<?php
 /*
    ./public/index.php
    DISPATCHER CENTRAL 
    rôle du init : définir les zones dynamiques et de se connexter a la bd
    rôle du routeur : hydrater les zones dynamiques
    rôle du template : afficher les zônes dynamiques
 */

 require_once '../core/init.php'; 
 require_once '../app/routers/index.php';
 require_once '../app/views/templates/index.php';

 
