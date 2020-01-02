<?php

namespace App\Entity;

use Core\Entity\Entity;

class DataEntity extends Entity
{
    public function getUrl(){
        return 'index.php?p=datas.detail&id=' . $this->id;
    }
}