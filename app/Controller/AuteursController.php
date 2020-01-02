<?php
/**
 * Cette classe est le controller de la partie Auteur
 * fait appel à la classe AppController 
 */
namespace App\Controller;

use Core\Controller\Controller;

class AuteursController extends AppController
{

    /**
     * Construct function
     * Il fait appel au construct du parent (AppController)
     * Puis il utilise la function loadModel du construct parent
     * pour faire appel à la classe ou les classes voulu(s)
     */
    public function __construct(){
        parent::__construct();
        $this->loadModel('Auteur');
        $this->loadModel('Fikr');
    }
    /**
     * Index function
     * Englobe tous les donnees dont a besoin la vue index
     * @return void
     */
    public function index(){
        $auteurs = $this->Auteur->allWithRegion();
        $fikrs = $this->Fikr->all();
        /**
         * Génération des vues grace à la fonction render (Core\Controller)
         * Contenir les variables et leurs valeurs grace à la fonction compact de php
         * @param String la vue
         * @param Array variables à contenir
         */ 
        $this->render('auteurs.index', compact('auteurs', 'fikrs'));
    }
    /**
     * Detail function
     * Englobe tous les donnees dont a besoin la vue detail
     * @return void
     */
    public function detail(){
        $auteur = $this->Auteur->findWithFikr($_GET['id']);
        /**
        * Génération de la vue grace à la fonction render (Core\Controller)
        * Contenir la variable et sa valeur grace à la fonction compact de php
        * @param String la vue
        * @param Array variables à contenir
        */
        $this->render('auteurs.detail', compact('auteur'));
    }
}