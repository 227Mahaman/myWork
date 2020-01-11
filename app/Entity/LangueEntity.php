<?php

namespace App\Entity;

use Core\Entity\Entity;

class LangueEntity extends Entity
{
    public function getUrl(){
        return 'index.php?p=fikrs.langue&id=' . $this->id;
    }
}