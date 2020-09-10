<?php

if (isset($_SESSION['user'])){
    setcookie("nom, NULL, 360");
    unset ($_SESSION['user']);
    header('location:films');
}