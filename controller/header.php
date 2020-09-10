<?php




if (isset($_SESSION['user'])) {
    echo $twig->render('header.html.twig', ['connexion' => 'Déconnexion', 'action'=> 'deconnexion_user', 'disparition' => 'display:block;']);
} else {
    echo $twig->render('header.html.twig', ['connexion' => 'Connexion', 'action'=> 'connexion_user', 'disparition' => 'display:none;']);
}
