<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['idUser'])) {
    //On appelle la fonction deleteOne()
    $UsersDao = new UsersDAO();
    /* @var $alloffers type */

    $status = $UsersDao->deleteOne((int) $_POST['idUser']);


    //On affiche le template Twig correspondant
    if ($status == 1) {
        echo $twig->render('delete_user.html.twig', ['status' => "Suppression OK"]);
    } else {
        echo $twig->render('delete_user.html.twig', ['status' => "Erreur Suppression"]);
    }

}
