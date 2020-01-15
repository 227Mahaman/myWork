<?php
/**
 * Cette classe est le controller de la partie Annonce
 * fait appel à la classe AppController 
 */
namespace App\Controller;

use Core\Controller\Controller;

use Core\HTML\BootstrapForm;

class ContacterController extends AppController
{
    /**
     * Construct function
     * Il fait appel au construct du parent (AppController)
     * Puis il utilise la function loadModel du construct parent
     * pour faire appel à la classe ou les classes voulu(s)
     */
    public function __construct(){
        parent::__construct();
        //$this->loadModel('Annonce');
    }
    /**
     * Nous function
     * Englobe tous les donnees dont a besoin la vue nous
     * @return void
     */
    public function nous(){
       //$annonces = $this->Annonce->last();
       //$categories = $this->Category->allWithCountFikr();
       //$fikrs = $this->Fikr->allWithCount();
       $form = new BootstrapForm($_POST);
       /**
        * Génération des vues grace à la fonction render (Core\Controller)
        * Contenir les variables et leurs valeurs grace à la fonction compact de php
        * @param String la vue
        * @param Array variables à contenir
        * @var Array annonces
        * @var Array categories
        * @var Array fikrs
        */ 
       $this->render('contacter.nous', compact('form'));
    }
    
}