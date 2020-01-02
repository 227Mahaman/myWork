<?php
/**
 * Cette classe est le controller de la partie Admin Auteurs
 * fait appel à la classe AppController 
 */
namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class AuteursController extends AppController
{
    public function __construct(){
        parent::__construct();
        $this->loadModel('Auteur');
    }
    public function index(){
        $items = $this->Auteur->all();
        $this->render('admin.auteurs.index', compact('items'));
    }

    public function add(){
        if(!empty($_POST)){
            if(!empty($_FILES)){
                $dossier_name = $_FILES['fichier']['name'];
                $dossier_type = $_FILES['fichier']['type'];
                $dossier_extension = strrchr($dossier_name, ".");
                
                $dossier_tmp_name = $_FILES['fichier']['tmp_name'];
                $dossier_dest = 'images/'.$dossier_name;

                $extensions_autorisees = array('.jpeg', '.png');
                if(in_array($dossier_extension, $extensions_autorisees))
                {
                    if(move_uploaded_file($dossier_tmp_name, $dossier_dest))
                    {
                        $result = $this->Auteur->create([
                            'nom' => $_POST['nom'],
                            'prenom' => $_POST['prenom'],
                            'statut' => 1,
                            'region' => $_POST['region'],
                            'description' => $_POST['description'],
                            'photo' => $dossier_dest
                        ]);
                        if($result){
                            return $this->index();
                        }
                    }
                }
            }
        }
        $this->loadModel('Region');
        $regions = $this->Region->extract('id', 'titre');
        $form = new BootstrapForm($_POST);
        $this->render('admin.auteurs.edit', compact('regions', 'form'));
    }

    public function edit(){
        if(!empty($_POST)){
            if(!empty($_FILES)){
                $dossier_name = $_FILES['fichier']['name'];
                $dossier_type = $_FILES['fichier']['type'];
                $dossier_extension = strrchr($dossier_name, ".");
                
                $dossier_tmp_name = $_FILES['fichier']['tmp_name'];
                $dossier_dest = 'images/'.$dossier_name;

                $extensions_autorisees = array('.jpeg', '.png');
                if(in_array($dossier_extension, $extensions_autorisees))
                {
                    if(move_uploaded_file($dossier_tmp_name, $dossier_dest))
                    {
                        $result = $this->Auteur->update($_GET['id'], [
                            'nom' => $_POST['nom'],
                            'prenom' => $_POST['prenom'],
                            'region' => $_POST['region'],
                            'description' => $_POST['description'],
                            'photo' => $dossier_dest
                        ]);
                        if($result){
                            return $this->index();
                        }
                    }
                }
            }
        }
        $auteur = $this->Auteur->find($_GET['id']);
        $this->loadModel('Region');
        $regions = $this->Region->extract('id', 'titre');
        $form = new BootstrapForm($auteur);
        $this->render('admin.auteurs.edit', compact('regions','form'));
    }

    public function delete(){
        if(!empty($_POST)){
            $result = $this->Auteur->delete($_POST['id']);
            return $this->index();
        }
    }
}