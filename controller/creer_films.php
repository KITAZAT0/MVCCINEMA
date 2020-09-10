<?php


if (isset($_SESSION['user'])){

    echo $twig->render('creer_film.html.twig');

}else {

    echo $twig->render('films.html.twig');

}