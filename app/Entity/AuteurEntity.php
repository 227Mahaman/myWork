<?php

namespace App\Entity;

use Core\Entity\Entity;

class AuteurEntity extends Entity
{
    public function getUrl(){
        return 'index.php?p=auteurs.detail&id=' . $this->id;
    }
}