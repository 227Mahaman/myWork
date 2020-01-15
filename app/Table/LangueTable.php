<?php

namespace App\Table;

use Core\Table\Table;

class LangueTable extends Table
{
    protected $table = 'langues';

    public function allWithCountFikr(){
        return $this->query("
            SELECT langues.id, langues.code, langues.titre, (SELECT COUNT(fikrs.id) FROM fikrs WHERE fikrs.langue_id=langues.id) as nombre
            FROM langues
        ");
    }
}