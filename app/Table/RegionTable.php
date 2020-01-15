<?php
namespace App\Table;

use Core\Table\Table;

class RegionTable extends Table 
{
    protected $table = 'regions';

    public function allWithCountFikr(){
        return $this->query("
            SELECT regions.id, regions.titre, (SELECT COUNT(auteurs.id) FROM auteurs WHERE auteurs.region=regions.id) as nombre
            FROM regions
        ");
    }
}