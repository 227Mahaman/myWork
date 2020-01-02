<?php

namespace App\Entity;

use Core\Entity\Entity;

class RegionEntity extends Entity
{
    public function getUrl(){
        return 'index.php?p=regions.detail&id=' . $this->id;
    }
}