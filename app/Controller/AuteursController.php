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
        $this->loadModel('Region');
    }
    /**
     * Index function
     * Englobe tous les donnees dont a besoin la vue index
     * @return void
     */
    public function index(){
        $auteurs = $this->Auteur->allWithRegion();
        $regions = $this->Region->allWithCountFikr();
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
        $auteur = $this->Auteur->findWithFikr($_GET['id']);
        /**
        * Génération de la vue grace à la fonction render (Core\Controller)
        * Contenir la variable et sa valeur grace à la fonction compact de php
        * @param String la vue
        * @param Array variables à contenir
        */
        $this->render('auteurs.detail', compact('auteur'));
    }

    public function region(){
        $region = $this->Region->find($_GET['id']);
        if($region === false){
            $this->notFound();
        }
        $auteurs = $this->Auteur->lastByRegion($_GET['id']);
        $regions = $this->Region->allWithCountFikr();
        /**
         * Génération de la vue grace à la fonction render (Core\Controller)
         * Contenir les variables et leurs valeurs grace à la fonction compact de php
         * @param String la vue
         * @param Array variables à contenir
         */
        $this->render('auteurs.region', compact('auteurs', 'regions', 'region'));
    }
}