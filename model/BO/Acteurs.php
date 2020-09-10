<?php

class Acteurs
{

    private $_idActeur;
    private $_nom;
    private $_prenom;
    
    public function __construct(int $idActeur, string $nom, string $prenom)
    {
        $this->set_idActeur($idActeur);
        $this->set_nom($nom);
        $this->set_prenom($prenom);
    }

     

    /**
     * Get the value of _idActeur
     */ 
    public function get_idActeur()
    {
        return $this->_idActeur;
    }

    /**
     * Set the value of _idActeur
     *
     * @return  self
     */ 
    public function set_idActeur($_idActeur)
    {
        $this->_idActeur = $_idActeur;

        return $this;
    }

    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }
}

