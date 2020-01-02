<?php
namespace App\Table;

use Core\Table\Table;

class DataTable extends Table 
{
    protected $table = 'datas';
    /**
     * Last function
     * Récupére les derniers datas
     * @return
     */
    public function lastData(){
        return $this->query("
            SELECT datas.id, datas.titre as lecture, datas.date, datas.chemin, fikrs.titre, fikrs.livre
            FROM datas 
            LEFT JOIN fikrs ON fikr=fikrs.id
            ORDER BY datas.date DESC
        ");
    }
    /**
     * FindWithCategory function
     * Récupérée une fikr en liant la categorie associee
     * @param Int id
     * @return \App\Entity\DataEntity
     */
    public function findWithFikr($id){
        return $this->query("
        SELECT datas.id, datas.titre as lecture, datas.date, datas.chemin, fikrs.titre
        FROM datas
        LEFT JOIN fikrs ON fikrs.id=datas.fikr
        WHERE datas.id = ?
        ORDER BY datas.date DESC", [$id]);
    }
}