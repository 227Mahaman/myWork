<?php
/**
 * Cette classe est le controller de la partie Admin Datas
 * fait appel à la classe AppController 
 */
namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class DatasController extends AppController
{
    public function __construct(){
        parent::__construct();
        $this->loadModel('Data');
    }
    public function index(){
        $items = $this->Data->lastData();
        $this->render('admin.datas.index', compact('items'));
    }

    public function add(){
        if(!empty($_POST)){
            if(!empty($_FILES)){
                $dossier_name = $_FILES['fichier']['name'];
                $dossier_type = $_FILES['fichier']['type'];
                $dossier_extension = strrchr($dossier_name, ".");
                
                $dossier_tmp_name = $_FILES['fichier']['tmp_name'];
                $dossier_dest = 'dossiers/'.$dossier_name;

                $extensions_autorisees = array('.mp3', '.mp4');
                if(in_array($dossier_extension, $extensions_autorisees))
                {
                    if(move_uploaded_file($dossier_tmp_name, $dossier_dest))
                    {
                        $result = $this->Data->create([
                            'titre' => $_POST['titre'],
                            'date' => $_POST['date'],
                            'fikr' => $_POST['fikr'],
                            'chemin' => $dossier_dest
                        ]);
                        if($result){
                            return $this->index();
                        }
                    }
                }
            }
        }
        $this->loadModel('Fikr');
        $fikrs = $this->Fikr->extract('id', 'titre');
        $form = new BootstrapForm($_POST);
        $this->render('admin.datas.edit', compact('fikrs', 'form'));
    }

    public function edit(){
        if(!empty($_POST)){
            if(!empty($_FILES)){
                $dossier_name = $_FILES['fichier']['name'];
                $dossier_type = $_FILES['fichier']['type'];
                $dossier_extension = strrchr($dossier_name, ".");
                
                $dossier_tmp_name = $_FILES['fichier']['tmp_name'];
                $dossier_dest = 'dossiers/'.$dossier_name;

                $extensions_autorisees = array('.mp3', '.mp4');
                if(in_array($dossier_extension, $extensions_autorisees))
                {
                    if(move_uploaded_file($dossier_tmp_name, $dossier_dest))
                    {
                        $result = $this->Data->update($_GET['id'], [
                            'titre' => $_POST['titre'],
                            'date' => $_POST['date'],
                            'fikr' => $_POST['fikr'],
                            'chemin' => $dossier_dest
                        ]);
                        if($result){
                            return $this->index();
                        }
                    }
                }
            }
        }
        $data = $this->Data->find($_GET['id']);
        $this->loadModel('Fikr');
        $fikrs = $this->Fikr->extract('id', 'titre');
        $form = new BootstrapForm($data);
        $this->render('admin.datas.edit', compact('fikrs','form'));
    }

    public function delete(){
        if(!empty($_POST)){
            $result = $this->Data->delete($_POST['id']);
            return $this->index();
        }
    }
}