<?php
/**
 * Cette classe est le controller de la partie Admin Annonce
 * fait appel à la classe AppController 
 */
namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class AnnoncesController extends AppController
{
    public function __construct(){
        parent::__construct();
        $this->loadModel('Annonce');
    }
    /**
     * 
     */
    public function index(){
        $annonces = $this->Annonce->all();
        $this->render('admin.annonces.index', compact('annonces'));
    }

    public function add(){
        if(!empty($_POST)){
            if(!empty($_FILES)){
                $dossier_name = $_FILES['fichier']['name'];
                $dossier_type = $_FILES['fichier']['type'];
                $dossier_extension = strrchr($dossier_name, ".");
                
                $dossier_tmp_name = $_FILES['fichier']['tmp_name'];
                $dossier_dest = 'images/'.$dossier_name;

                $extensions_autorisees = array('.jpg', '.jpeg', '.png');
                if(in_array($dossier_extension, $extensions_autorisees))
                {
                    if(move_uploaded_file($dossier_tmp_name, $dossier_dest))
                    {
                        $result = $this->Annonce->create([
                            'titre' => $_POST['titre'],
                            'description' => $_POST['description'],
                            'auteur' => $_POST['auteur'],
                            'date' => $_POST['date'],
                            'lieu' => $_POST['lieu'],
                            'category_id' => $_POST['categorie'],
                            'photo' => $dossier_dest
                        ]);
                        /**
                         * Dès que l'insertion s'est bien passé
                         * On redirige vers l' annonces.edit, tout
                         * en recureperant l'id de l'annonce, à
                         * travers App::getInstance()->getDb()->lastInsertId()
                         * @param result
                         */
                        if($result){
                            return $this->index();
                        }
                    }
                }
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->extract('id', 'titre');
        $form = new BootstrapForm($_POST);
        $this->render('admin.annonces.edit', compact('categories', 'form'));
    }

    public function edit(){
        if(!empty($_POST)){
            if(!empty($_FILES)){
                $dossier_name = $_FILES['fichier']['name'];
                $dossier_type = $_FILES['fichier']['type'];
                $dossier_extension = strrchr($dossier_name, ".");
                
                $dossier_tmp_name = $_FILES['fichier']['tmp_name'];
                $dossier_dest = 'images/'.$dossier_name;

                $extensions_autorisees = array('.jpg', '.jpeg', '.png');
                if(in_array($dossier_extension, $extensions_autorisees))
                {
                    if(move_uploaded_file($dossier_tmp_name, $dossier_dest))
                    {
                        $result = $this->Annonce->update($_GET['id'], [
                            'titre' => $_POST['titre'],
                            'description' => $_POST['description'],
                            'auteur' => $_POST['auteur'],
                            'date' => $_POST['date'],
                            'lieu' => $_POST['lieu'],
                            'category_id' => $_POST['category_id'],
                            'photo' => $dossier_dest
                        ]);
                        if($result){
                            return $this->index();
                        }
                    }
                }
            }
        }
        $annonce = $this->Annonce->find($_GET['id']);
        $this->loadModel('Category');
        $categories = $this->Category->extract('id', 'titre');
        $form = new BootstrapForm($annonce);
        $this->render('admin.annonces.edit', compact('categories', 'form'));
    }

    public function delete(){
        if(!empty($_POST)){
            $result = $this->Annonce->delete($_POST['id']);
            return $this->index();
        }
    }
}