<?php
/**
 * Cette classe est le controller de la partie Admin Langues
 * fait appel à la classe AppController 
 */
namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class LanguesController extends AppController
{
    public function __construct(){
        parent::__construct();
        $this->loadModel('Langue');
    }
    public function index(){
        $items = $this->Langue->all();
        $this->render('admin.langues.index', compact('items'));
    }

    public function add(){
        if(!empty($_POST)){
            $result = $this->Langue->create([
                'code' => $_POST['code'],
                'titre' => $_POST['titre']
            ]);
            return $this->index();
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.langues.edit', compact('form'));
    }

    public function edit(){
        if(!empty($_POST)){
            $result = $this->Langue->update($_GET['id'], [
                'code' => $_POST['code'],
                'titre' => $_POST['titre']
            ]);
            return $this->index();
        }
        $langue = $this->Langue->find($_GET['id']);
        $form = new BootstrapForm($langue);
        $this->render('admin.langues.edit', compact('form'));
    }

    public function delete(){
        if(!empty($_POST)){
            $result = $this->Langue->delete($_POST['id']);
            return $this->index();
        }
    }
}