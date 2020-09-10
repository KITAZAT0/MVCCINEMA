<?php

/* ne pas zappe le check email */ 
$message= "";
$passwordcorrect = true;
if (isset($_POST['connexion_email']) && $_POST['connexion_email']){
    if (isset($_POST['connexion_password']) && $_POST['connexion_password']){

        $email = $_POST['connexion_email'];
        $password = $_POST['connexion_password'];

        $connexionDAO = new UsersDAO();
        $connexion = $connexionDAO->connexionuser($email);


        $passwordcorrect = password_verify($password, $connexion->get_password());


        if ($passwordcorrect == false)
        {
            $message = 'Mauvais email ou mot de passe';
        }
        elseif ($passwordcorrect == true)
        {
                $_SESSION['user'] = $email;
                header('location:films');
        }
    }
}

echo $twig->render('connexion.html.twig', ['message' => $message]);