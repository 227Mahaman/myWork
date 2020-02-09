<?php
/**
 * Cette classe est le controller de la partie Fikr
 * fait appel à la classe AppController 
 */
namespace App\Controller;

use Core\Controller\Controller;

use Core\HTML\BootstrapForm;

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
        $this->loadModel('Langue');
    }
    /**
     * Index function
     * Englobe tous les donnees dont a besoin la vue index
     * @return void
     */
    public function index(){
        $errors = false;
        $fikrs = $this->Fikr->lastFikr();
        $auteurs = $this->Auteur->allWithCountFikr();
        $langues = $this->Langue->allWithCountFikr();
        $form = new BootstrapForm($_POST);
        if(!empty($_POST)){
            $result = $this->Fikr->recherche($_POST['search']);
            if($result){
                return $this->render('fikrs.search', compact('result', 'auteurs', 'langues', 'form', 'errors'));
            }
            else {
                $errors = true;
                return $this->render('fikrs.index', compact('fikrs', 'auteurs', 'langues', 'form', 'errors'));
            }
        }
       /**
        * Génération des vues grace à la fonction render (Core\Controller)
        * Contenir les variables et leurs valeurs grace à la fonction compact de php
        * @param String la vue
        * @param Array variables à contenir
        */ 
       $this->render('fikrs.index', compact('fikrs', 'auteurs', 'langues', 'form', 'errors'));
    }
    /**
     * Langue function
     * Englobe tous les donnees dont à besoin la vue langue
     * @return void
     */
    public function langue(){
        $auteurs = $this->Auteur->allWithCountFikr();
        $langues = $this->Langue->allWithCountFikr();
        $fikrs = $this->Fikr->fikrWithLangue($_GET['id']);
        /**
         * Génération de la vue grace à la fonction render (Core\Controller)
         * Contenir les variables et leurs valeurs grace à la fonction compact de php
         * @param String la vue
         * @param Array variables à contenir
         */
        $this->render('fikrs.langue', compact('auteurs', 'langues', 'fikrs'));
    }

    public function auteur(){
        $auteurs = $this->Auteur->allWithCountFikr();
        $langues = $this->Langue->allWithCountFikr();
        $fikrs = $this->Fikr->fikrWithAuteur($_GET['id']);
        /**
         * Génération de la vue grace à la fonction render (Core\Controller)
         * Contenir les variables et leurs valeurs grace à la fonction compact de php
         * @param String la vue
         * @param Array variables à contenir
         */
        $this->render('fikrs.auteur', compact('auteurs', 'langues', 'fikrs'));
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
    public function search($search){
        var_dump();
        die();
    }
}