<?php

namespace App\Entity;

use Core\Entity\Entity;

class UserEntity extends Entity
{
    public function getUrl(){
        return 'index.php?p=users.detail&id=' . $this->id;
    }
}