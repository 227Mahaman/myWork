<?php

namespace App\Entity;

use Core\Entity\Entity;

class RegionEntity extends Entity
{
    public function getUrl(){
        return 'index.php?p=auteurs.region&id=' . $this->id;
    }
}