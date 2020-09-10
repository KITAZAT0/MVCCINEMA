<?php 
$message = "";
$status = false;

if (isset($_POST['email']) && $_POST['email'] && isset($_POST['password']) && $_POST['password']) {
   

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        
        
        if (isset($password) && $password && isset($confirm_password) && $confirm_password) {
            if ($password == $confirm_password) {
                
               $userDao = new UsersDAO();
                $newUser = new Users(null,$email,password_hash($password,PASSWORD_ARGON2I));
                $status = $userDao->add($newUser);
               
                if ($status) {
                    $message = "Votre compte a été créer";
                    $user = $newUser;
                } else {
                    echo $twig->render('creer_user.html.twig', ['status' => "Erreur Ajout"]);
                }
               
        

        }  else {
        
            $message = 'Les mot de passe doivent être les mêmes';
        }
                
    } 
    






} else {

    $message = 'Veuillez remplir tous les champs';

}

echo $twig->render('creer_user.html.twig', ['status' => $status, 'message' => $message]);
          