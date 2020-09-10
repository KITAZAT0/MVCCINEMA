<?php

class Roles
{

    private $_idRole;
    private $_personnage;
    private $_acteur;

    public function __construct($idRole = 0, $personnage, $acteur)
    {
        $this->set_idRole($idRole);
        $this->set_personnage($personnage);
        $this->set_acteur($acteur);
    }

    

    /**
     * Get the value of _idRole
     */ 
    public function get_idRole()
    {
        return $this->_idRole;
    }

    /**
     * Set the value of _idRole
     *
     * @return  self
     */ 
    public function set_idRole($_idRole)
    {
        $this->_idRole = $_idRole;

        return $this;
    }

    /**
     * Get the value of _personnage
     */ 
    public function get_personnage()
    {
        return $this->_personnage;
    }

    /**
     * Set the value of _personnage
     *
     * @return  self
     */ 
    public function set_personnage($_personnage)
    {
        $this->_personnage = $_personnage;

        return $this;
    }

    /**
     * Get the value of _acteur
     */ 
    public function get_acteur()
    {
        return $this->_acteur;
    }

    /**
     * Set the value of _acteur
     *
     * @return  self
     */ 
    public function set_acteur($_acteur)
    {
        $this->_acteur = $_acteur;

        return $this;
    }
}