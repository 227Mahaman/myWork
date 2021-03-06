<?php
namespace App\Table;

use Core\Table\Table;

class AuteurTable extends Table 
{
    protected $table = 'auteurs';
    /**
     * Last Auteur function
     * Récupére les derniers auteurs
     * @return array
     */
    public function lastAuteur(){
        return $this->query("
            SELECT auteurs.id, auteurs.nom, auteurs.prenom, auteurs.region, statuts.grade
            FROM auteurs 
            LEFT JOIN statuts ON statut=statuts.id
        ");
    }
    /**
     * All With Count function
     * Les auteurs avec leurs nombres de fikrs
     * @var Int auteur_id
     * @return
     */
    public function allWithCount($auteur_id){
        return $this->query("
            SELECT COUNT(fikrs.id) as nombre
            FROM auteurs 
            LEFT JOIN fikrs ON auteurs.id=fikrs.fikr
            WHERE fikrs.id = ?
        ",[$auteur_id]);
    }
    /**
     * All function
     * Tous les auteurs
     * @return
     */
    public function allWithCountFikr(){
        return $this->query("
            SELECT auteurs.id, auteurs.nom, auteurs.prenom, (SELECT COUNT(fikrs.id) FROM fikrs WHERE fikrs.auteur=auteurs.id) as nombre
            FROM auteurs
        ");
    }
    /**
     * All With Region function
     * Tous les auteurs avec leurs régions
     * @return
     */
    public function allWithRegion(){
        return $this->query("
            SELECT auteurs.id, auteurs.nom, auteurs.prenom, auteurs.description, auteurs.photo, regions.titre
            FROM auteurs
            LEFT JOIN regions ON region=regions.id
        ");
    }

    public function findWithFikr($id){
        return $this->query("
            SELECT auteurs.id, auteurs.nom, auteurs.prenom, fikrs.id as fikr, fikrs.titre, fikrs.livre, fikrs.date
            FROM fikrs
            LEFT JOIN auteurs ON auteur=auteurs.id
            WHERE auteurs.id = ?
        ", [$id]);
    }

    public function lastByRegion($region_id){
        return $this->query("
            SELECT auteurs.id, auteurs.nom, auteurs.prenom, auteurs.description, auteurs.photo, regions.titre
            FROM auteurs 
            LEFT JOIN regions ON region=regions.id
            WHERE auteurs.region = ?
        ",[$region_id]);
    }
}