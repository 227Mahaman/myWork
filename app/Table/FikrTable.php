<?php
namespace App\Table;

use Core\Table\Table;

class FikrTable extends Table 
{
    protected $table = 'fikrs';

    /**
     * All With Count function
     * Les fikrs avec leurs nombres de datas
     * @var Int fikr_id
     * @return
     */
    public function allWithCount($fikr_id){
        return $this->query("
            SELECT COUNT(datas.id) as nombre
            FROM fikrs 
            LEFT JOIN datas ON fikrs.id=datas.fikr
            WHERE fikrs.id = ?
        ",[$fikr_id]);
    }
    /**
     * All function
     * Les fikrs affichés avec une limite de 4
     * @return
     */
    public function all(){
        return $this->query("
            SELECT fikrs.id, fikrs.titre, fikrs.date
            FROM fikrs
            ORDER BY fikrs.date DESC
            LIMIT 4
        ");
    }
    /**
     * Last Fikr function
     * Récupére les derniers fikrs
     * @return
     */
    public function lastFikr(){
        return $this->query("
            SELECT fikrs.id, fikrs.titre, fikrs.livre, fikrs.date, auteurs.nom, auteurs.prenom, langues.titre as langue, (SELECT COUNT(datas.id) FROM datas WHERE datas.fikr=fikrs.id) as nombre
            FROM fikrs 
            LEFT JOIN auteurs ON auteur=auteurs.id
            LEFT JOIN langues ON langue_id=langues.id
            ORDER BY fikrs.date DESC
        ");
    }

    public function fikrWithLangue($langue_id){
        return $this->query("
            SELECT fikrs.id, fikrs.titre, fikrs.livre, fikrs.date, auteurs.nom, auteurs.prenom, langues.titre as langue, (SELECT COUNT(datas.id) FROM datas WHERE datas.fikr=fikrs.id) as nombre
            FROM fikrs 
            LEFT JOIN auteurs ON auteur=auteurs.id
            LEFT JOIN langues ON langue_id=langues.id
            WHERE fikrs.langue_id = ?
        ",[$langue_id]);
    }

    public function fikrWithAuteur($auteur){
        return $this->query("
            SELECT fikrs.id, fikrs.titre, fikrs.livre, fikrs.date, auteurs.nom, auteurs.prenom, langues.titre as langue, (SELECT COUNT(datas.id) FROM datas WHERE datas.fikr=fikrs.id) as nombre
            FROM fikrs 
            LEFT JOIN auteurs ON auteur=auteurs.id
            LEFT JOIN langues ON langue_id=langues.id
            WHERE fikrs.auteur = ?
        ",[$auteur]);
    }

    public function nombreByFikr($id){
        return $this->query("
            SELECT COUNT(datas.id) as nombre
            FROM datas
            WHERE fikr = ?
        ",[$id]);
    }

    /**
     * findAuteur function
     * Récupére les dernieres fikrs de la auteur selectionnée
     * @param int fikr_id id de la auteur selectionnee
     * @return array
     */
    public function findAuteur($fikr_id){
        return $this->query("
            SELECT fikrs.id, fikrs.titre, fikrs.livre, fikrs.date, auteurs.nom, auteurs.prenom
            FROM fikrs 
            LEFT JOIN auteurs ON auteur=auteurs.id 
            WHERE fikrs.id = ?
        ",[$fikr_id]);
    }
    /**
     * LastByAuteur function
     * Récupére les dernieres fikrs de l'auteur selectionnée
     * @param int $auteur id de l'auteur selectionnee
     * @return array
     */
    public function getAuteur($fikr){
        return $this->query("
            SELECT fikrs.id, fikrs.titre, fikrs.livre, fikrs.date, auteurs.nom, auteurs.prenom
            FROM fikrs 
            LEFT JOIN auteurs ON auteur=auteurs.id
            WHERE fikrs.id = ?
        ",[$fikr]);
    }
    /**
     * FindWithCategory function
     * Récupérée une fikr en liant la categorie associee
     * @param Int id
     * @return \App\Entity\FikrEntity
     */
    public function findWithData($id){
        return $this->query("
        SELECT fikrs.id, fikrs.titre, fikrs.livre, datas.titre as lecture, datas.date, datas.chemin
        FROM datas
        LEFT JOIN fikrs ON fikrs.id=datas.fikr
        WHERE fikrs.id = ?
        ORDER BY datas.date DESC", [$id]);
    }
}