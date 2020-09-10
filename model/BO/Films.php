<?php

class Films
{

    private $_affiche;
    private $_annee;
    private $_idFilm;
    private $_realisateur;
    private $_titre;
    private $_roles = array();

    public function __construct($idFilm = 0, string $titre, $affiche, string $realisateur, $annee, $roles = array())
    {
        $this->set_affiche($affiche);
        $this->set_annee($annee);
        $this->set_idFilm($idFilm);
        $this->set_realisateur($realisateur);
        $this->set_titre($titre);
        $this->set_roles($roles);

    }


    public function add_role($role)

    {
        $this->_roles[] = $role;
    }



    /**
     * Get the value of _affiche
     */ 
    public function get_affiche()
    {
        return $this->_affiche;
    }

    /**
     * Set the value of _affiche
     *
     * @return  self
     */ 
    public function set_affiche($_affiche)
    {
        $this->_affiche = $_affiche;

        return $this;
    }

    

    /**
     * Get the value of _annee
     */ 
    public function get_annee()
    {
        return $this->_annee;
    }

    /**
     * Set the value of _annee
     *
     * @return  self
     */ 
    public function set_annee($_annee)
    {
        $this->_annee = $_annee;

        return $this;
    }

    /**
     * Get the value of _id
     */ 
    public function get_idFilm()
    {
        return $this->_idFilm;
    }

    /**
     * Set the value of _id
     *
     * @return  self
     */ 
    public function set_idFilm($_idFilm)
    {
        $this->_idFilm = $_idFilm;

        return $this;
    }

    /**
     * Get the value of _realisateur
     */ 
    public function get_realisateur()
    {
        return $this->_realisateur;
    }

    /**
     * Set the value of _realisateur
     *
     * @return  self
     */ 
    public function set_realisateur($_realisateur)
    {
        $this->_realisateur = $_realisateur;

        return $this;
    }

    /**
     * Get the value of _titre
     */ 
    public function get_titre()
    {
        return $this->_titre;
    }

    /**
     * Set the value of _titre
     *
     * @return  self
     */ 
    public function set_titre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }

    /**
     * Get the value of _roles
     */ 
    public function get_roles()
    {
        return $this->_roles;
    }

    /**
     * Set the value of _roles
     *
     * @return  self
     */ 
    public function set_roles($_roles)
    {
        $this->_roles = $_roles;

        return $this;
    }
}
