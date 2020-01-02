<?php

namespace App\Entity;

use Core\Entity\Entity;

class AnnonceEntity extends Entity
{
    public function getUrl(){
        return 'index.php?p=annonces.detail&id=' . $this->id;
    }

    public function getExtrait(){
        $html = '<p>' . substr($this->description, 0, 125) . '...</p>';
        $html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a></p>';
        return $html;
    }
}