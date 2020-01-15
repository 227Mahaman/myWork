<?php

namespace App\Table;

use Core\Table\Table;

class CategoryTable extends Table
{
    protected $table = 'categories';

    public function allWithCountFikr(){
        return $this->query("
            SELECT categories.id, categories.titre, (SELECT COUNT(annonces.id)FROM annonces WHERE annonces.category_id=categories.id) as nombre
            FROM categories
        ");
    }
}