<?php
/**
 * Cette classe est le controller de la partie Fikr
 * fait appel à la classe AppController 
 */
namespace App\Controller;

use Core\Controller\Controller;

class FikrsController extends AppController
{
    /**
     * Construct function
     * Il fait appel au construct du parent (AppController)
     * Puis il utilise la function loadModel du construct parent
     * pour faire appel à la classe ou les classes voulu(s)
     */
    public function __construct(){
        parent::__construct();
        $this->loadModel('Fikr');
        $this->loadModel('Auteur');
        $this->loadModel('Category');
    }
    /**
     * Index function
     * Englobe tous les donnees dont a besoin la vue index
     * @return void
     */
    public function index(){
       $fikrs = $this->Fikr->lastFikr();
       $auteurs = $this->Auteur->all();
       $categories = $this->Category->all();
       /**
        * Génération des vues grace à la fonction render (Core\Controller)
        * Contenir les variables et leurs valeurs grace à la fonction compact de php
        * @param String la vue
        * @param Array variables à contenir
        */ 
       $this->render('fikrs.index', compact('fikrs', 'auteurs', 'categories'));
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
     * @var Array datas (Les datas de notre fikr selectionné)
     * @var Array auteur (Auteur du fikr)
     * @var Array auteur_fikr (Les autres fikrs de l'auteur)
     * @return void
     */
    public function detail(){
        $datas = $this->Fikr->findWithData($_GET['id']);
        $auteur = $this->Fikr->getAuteur($_GET['id']);
        //$auteur_fikr = $this->Fikr->auteurFikr($_GET['id']);
        /**
        * Génération de la vue grace à la fonction render (Core\Controller)
        * Contenir la variable et sa valeur grace à la fonction compact de php
        * @param String la vue
        * @param Array variables à contenir
        */
        $this->render('fikrs.detail', compact('datas', 'auteur'));
    }
}