<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Offres
 *
 * @author 1703728
 */
class UsersDAO extends Dao
{

//Récupérer toutes les offres
    public function getAll($user)
    {
        //On définit la bdd pour la fonction

        $query = $this->_bdd->prepare("SELECT user.idUser, user.email, user.password FROM user");
        $query->execute();
        $users = array();

        while ($data = $query->fetch()) {
            $users[] = new Users($data['idUser'], $data['email'], $data['password']);
        }
        return ($users);
    }

    //Ajouter une offre
    public function add($data)
    {

        $valeurs = ['email' => $data->get_email(), 'password' => $data->get_password()];
        $requete = 'INSERT INTO user (email, password) VALUES (:email , :password)';
        $insert = $this->_bdd->prepare($requete);
        if (!$insert->execute($valeurs)) {
            //print_r($insert->errorInfo());
            return false;
        } else {
            return true;
        }

    }

    //Récupérer plus d'info sur 1 offre
    public function getOne($id)
    {

        $query = $this->_bdd->prepare('SELECT * FROM user WHERE user.idUser = :idUser');
        $query->execute(array(':idUser' => $idUser));
        $data = $query->fetch();
        $user = new user($data);
        return ($user);
    }

    public function connexionuser($email)
    {
        $query = $this->_bdd->prepare('SELECT idUser, email, password FROM user WHERE email = :email');
        $query->execute(array ('email' => $email));
        $data = $query->fetch();
        $user = new Users ($data['idUser'],$data['email'],$data['password']);
        return ($user);
    
    
    }

}
