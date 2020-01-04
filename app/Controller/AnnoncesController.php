<?php
/**
 * Cette classe est le controller de la partie Annonce
 * fait appel à la classe AppController 
 */
namespace App\Controller;

use Core\Controller\Controller;

class AnnoncesController extends AppController
{
    /**
     * Construct function
     * Il fait appel au construct du parent (AppController)
     * Puis il utilise la function loadModel du construct parent
     * pour faire appel à la classe ou les classes voulu(s)
     */
    public function __construct(){
        parent::__construct();
        $this->loadModel('Annonce');
        $this->loadModel('Category');
        $this->loadModel('Fikr');
    }
    /**
     * Index function
     * Englobe tous les donnees dont a besoin la vue index
     * @return void
     */
    public function index(){
       $annonces = $this->Annonce->last();
       $categories = $this->Category->all();
       $fikrs = $this->Fikr->all();
       /**
        * Génération des vues grace à la fonction render (Core\Controller)
        * Contenir les variables et leurs valeurs grace à la fonction compact de php
        * @param String la vue
        * @param Array variables à contenir
        * @var Array annonces
        * @var Array categories
        * @var Array fikrs
        */ 
       $this->render('annonces.index', compact('annonces', 'categories', 'fikrs'));
    }
    /**
     * Category function
     * Englobe tous les donnees dont à besoin la vue category
     * @return void
     */
    public function category(){
        $categorie = $this->Category->find($_GET['id']);
        if($categorie === false){
            $this->notFound();
        }
        $annonces = $this->Annonce->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        /**
         * Génération de la vue grace à la fonction render (Core\Controller)
         * Contenir les variables et leurs valeurs grace à la fonction compact de php
         * @param String la vue
         * @param Array variables à contenir
         */
        $this->render('annonces.categorie', compact('annonces', 'categories', 'categorie'));
    }
    /**
     * Detail function
     * Englobe tous les donnees dont a besoin la vue detail
     * @return void
     */
    public function detail(){
        $annonce = $this->Annonce->findWithCategory($_GET['id']);
        $categories = $this->Category->all();
        /**
        * Génération de la vue grace à la fonction render (Core\Controller)
        * Contenir la variable et sa valeur grace à la fonction compact de php
        * @param String la vue
        * @param Array variables à contenir
        */
        $this->render('annonces.detail', compact('annonce', 'categories'));
    }
}