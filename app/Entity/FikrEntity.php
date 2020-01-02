<?php

namespace App\Entity;

use Core\Entity\Entity;

class FikrEntity extends Entity
{
    public function getUrl(){
        return 'index.php?p=fikrs.detail&id=' . $this->id;
    }
}