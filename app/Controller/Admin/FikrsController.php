<?php
/**
 * Cette classe est le controller de la partie Admin Fikrs
 * fait appel à la classe AppController 
 */
namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class FikrsController extends AppController
{
    public function __construct(){
        parent::__construct();
        $this->loadModel('Fikr');
    }
    public function index(){
        $items = $this->Fikr->lastFikr();
        $this->render('admin.fikrs.index', compact('items'));
    }

    public function add(){
        if(!empty($_POST)){
            $result = $this->Fikr->create([
                'titre' => $_POST['titre'],
                'livre' => $_POST['livre'],
                'auteur' => $_POST['auteur'],
                'date' => $_POST['date']
            ]);
            if($result){
                return $this->index();
            }
        }
        $this->loadModel('Auteur');
        $auteurs = $this->Auteur->extract('id', 'nom');
        $form = new BootstrapForm($_POST);
        $this->render('admin.fikrs.edit', compact('auteurs', 'form'));
    }

    public function edit(){
        if(!empty($_POST)){
            $result = $this->Fikr->update($_GET['id'], [
                'titre' => $_POST['titre'],
                'livre' => $_POST['livre'],
                'auteur' => $_POST['auteur'],
                'date' => $_POST['date']
            ]);
            if($result){
                return $this->index();
            }
        }
        $fikr = $this->Fikr->find($_GET['id']);
        $this->loadModel('Auteur');
        $auteurs = $this->Auteur->extract('id', 'nom');
        $form = new BootstrapForm($fikr);
        $this->render('admin.fikrs.edit', compact('auteurs','form'));
    }

    public function delete(){
        if(!empty($_POST)){
            $result = $this->Fikr->delete($_POST['id']);
            return $this->index();
        }
    }
}