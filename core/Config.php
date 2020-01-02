<?php

namespace Core;

/**Class static */
class Config
{
    private $settings = [];
    private static $_instance;
    
    /**
     * Cette fonction recupere 
     * une seule et meme instance du $file
     * @param string $file le fichier à instancier
     * @return void
     */
    public static function getInstance($file){
        if(is_null(self::$_instance)){
            self::$_instance = new Config($file);
        }
        return self::$_instance;
    }
    /**
     * Ce constructeur recupere les données provenant
     * d'un autre fichier
     * @param string $file le fichier à récuperer (require)
     */
    public function __construct($file){
        $this->settings = require($file);
    }
    /**
     * Ce get recupere un element
     * voulu du tableau recupere
     * au niveau du construct
     * @param string $key element voulu
     * @return void
     */
    public function get($key){
        if(!isset($this->settings[$key])){
            return null;
        }
        return $this->settings[$key];
    }

}