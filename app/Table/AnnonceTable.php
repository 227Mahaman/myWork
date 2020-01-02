<?php

namespace App\Table;

use Core\Table\Table;

class AnnonceTable extends Table
{
    protected $table = 'annonces';
    /**
     * Last function
     * Récupére les derniers annonces
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT annonces.id, annonces.titre, annonces.description, annonces.auteur,  annonces.date, annonces.lieu, categories.titre as categorie 
            FROM annonces 
            LEFT JOIN categories ON category_id=categories.id
            ORDER BY annonces.date DESC
            LIMIT 10
        ");
    }
    /**
     * LastByCategory function
     * Récupére les dernieres annonces de la categorie selectionnée
     * @param int $category_id id de la categorie selectionnee
     * @return array
     */
    public function lastByCategory($category_id){
        return $this->query("
            SELECT annonces.id, annonces.titre, annonces.description, annonces.auteur,  annonces.date, annonces.lieu, categories.titre as categorie 
            FROM annonces 
            LEFT JOIN categories ON category_id=categories.id
            WHERE annonces.category_id = ?
            ORDER BY annonces.date DESC
        ",[$category_id]);
    }
    /**
     * FindWithCategory function
     * Récupérée une annonce en liant la categorie associee
     * @param Int id
     * @return \App\Entity\AnnonceEntity
     */
    public function findWithCategory($id){
        return $this->query("
        SELECT annonces.id, annonces.titre, annonces.description, annonces.auteur,  annonces.date, annonces.lieu, categories.titre as categorie 
        FROM annonces 
        LEFT JOIN categories ON category_id=categories.id
        WHERE annonces.id = ?", [$id], true);
    }

    
} 