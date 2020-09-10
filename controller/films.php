<?php

$FilmsDao = new FilmsDAO();
/* @var $alloffers type */
if (isset($_POST['recherche'])){
$allfilms = $FilmsDao->getAll($_POST['recherche']);
} else {
$allfilms = $FilmsDao->getAll("");
}
//On affiche le template Twig correspondant
echo $twig->render('films.html.twig', ['allfilms' => $allfilms]);



