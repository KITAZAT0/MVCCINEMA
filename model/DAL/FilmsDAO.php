<?php

class FilmsDAO extends Dao
{
    public function getAll($recherche)
    {
        //On définit la bdd pour la fonction

        $query = $this->_bdd->prepare("SELECT affiche, annee, films.idFilm, realisateur, titre, idRole, nom, prenom, personnage FROM films JOIN role ON films.idFilm = role.idFilm JOIN acteurs ON role.idActeur = acteurs.idActeur WHERE upper(films.titre) LIKE :recherche");
        $query->execute(array(':recherche' => "%" . strtoupper($recherche) . "%"));
        $films = array();

        $id = 0;
        while ($data = $query->fetch()) {
            $acteur = new Acteurs(0, $data['nom'], $data['prenom']);
            $role = new Roles($data['idRole'], $data['personnage'], $acteur);
            if ($id != $data['idFilm']) {
                $films[] = new Films($data['idFilm'], $data['titre'], $data['affiche'], $data['realisateur'], $data['annee']);
                $id = $data['idFilm'];
            }
            $films[count($films) - 1]->add_role($role);
        }
/*echo '<pre>';
print_r ($films[count($films)-1]);
echo '</pre>';
*/
        return ($films);
    }

    //Ajouter une offre
    public function add($data)
    {

        $valeurs = ['titre' => $data->get_titre(), 'annee' => $data->get_annee()];
        $requete = 'INSERT INTO offers (title, description) VALUES (:title , :description)';
        $insert = $this->_bdd->prepare($requete);
        if (!$insert->execute($valeurs)) {
            //print_r($insert->errorInfo());
            return false;
        } else {
            return true;
        }

    }

    //Récupérer plus d'infos sur une offre
    public function getOne($idOffer): Offres
    {

        $query = $this->_bdd->prepare('SELECT * FROM offers WHERE offers.id = :idOffer');
        $query->execute(array(':idOffer' => $idOffer));
        $data = $query->fetch();
        $offer = new Offres($data);
        return ($offer);
    }

    //Supprimer l'offre dans la base de données
    public function deleteOne($idOffer): int
    {
        $query = $this->_bdd->prepare('DELETE FROM offers WHERE offers.id = :idOffer');
        $query->execute(array(':idOffer' => $idOffer));
        return ($query->rowCount());
    }

}
