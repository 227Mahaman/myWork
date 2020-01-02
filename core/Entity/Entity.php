<?php

namespace Core\Entity;

class Entity
{
    /**
     * Get function
     * Methode magique qui appelle function une autre methode
     * @param string $key
     * @return void
     */
    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }
}