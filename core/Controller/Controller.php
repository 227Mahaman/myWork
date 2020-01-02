<?php

namespace Core\Controller;

class Controller
{
    /**
     * Prend le chemin de la vue à appeler
     * @var string
     */
    protected $viewPath;

    protected $template;
    /**
     * Render function
     * Elle prend la vue et les données
     * Elle nous renvoie sur la vue voulu
     * @param string $view la vue
     * @param array $variables contient les donnees(du controller) requises pour la vue
     * @return void
     */
    protected function render($view, $variables = []){
        ob_start();
        /**
         * extract function
         * Nous permet d'extraire les variables et leurs valeurs contenus par la fonction compact
         * @param Array variables
         */
        extract($variables);
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'templates/' . $this->template . '.php');
    }

    protected function forbidden(){
        header('HTTP/1.0 403 forbidden');
        die('Access interdit');
    }

    protected function notFound(){
        header('HTTP/1.0 403 Not Found');
        die('Page introuvable');
    }
    //deconnexion
    protected function deconnexion(){
        session_destroy();
        $this->render('users.login');
    }
}