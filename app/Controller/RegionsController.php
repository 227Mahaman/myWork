<?php
/**
 * Cette classe est le controller de la partie Auteur
 * fait appel à la classe AppController 
 */
namespace App\Controller;

use Core\Controller\Controller;

class RegionsController extends AppController
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
        $this->loadModel('Region');
    }
    /**
     * Index function
     * Englobe tous les donnees dont a besoin la vue index
     * @return void
     */
    public function index(){
        $auteurs = $this->Auteur->allWithRegion();
        $regions = $this->Region->all();
        /**
         * Génération des vues grace à la fonction render (Core\Controller)
         * Contenir les variables et leurs valeurs grace à la fonction compact de php
         * @param String la vue
         * @param Array variables à contenir
         */ 
        $this->render('auteurs.index', compact('auteurs', 'regions'));
    }
    /**
     * Detail function
     * Englobe tous les donnees dont a besoin la vue detail
     * @return void
     */
    public function detail(){
        $region = $this->Region->findWithAuteur($_GET['id']);
        /**
        * Génération de la vue grace à la fonction render (Core\Controller)
        * Contenir la variable et sa valeur grace à la fonction compact de php
        * @param String la vue
        * @param Array variables à contenir
        */
        $this->render('regions.detail', compact('region'));
    }
}