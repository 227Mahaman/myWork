<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class AppController extends Controller
{
    protected $template = 'default';

    public function __construct()
    {
        $this->viewPath = 'app/Views/';
    }
    /**
     * Fonction loadModel
     * Chargement des Models
     * @param String model_name
     */
    protected function loadModel($model_name){
        $this->$model_name = App::getInstance()->getTable($model_name);
    }
}