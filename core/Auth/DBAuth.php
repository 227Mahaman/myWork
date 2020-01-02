<?php

namespace Core\Auth;

use Core\Database\Database;

class DBAuth {

    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }
    /**
     * GetUserId function
     * Elle returne la session du user / l'id
     * @return void
     */
    public function getUserId(){
        if($this->logged()){
            return $_SESSION['auth'];
        }
        return false;
    }
    /**
     * Login function
     * Authentification
     * @param string $username
     * @param string $password
     * @return boolean true/false
     */
    public function login($username, $password){
        $user = $this->db->prepare("SELECT * FROM users WHERE username = ?", [$username], null, true);
        /**
         * Condition pour vérifier le mot de pass
         * @return SESSION auth
         */      
        if($user){
            if($user->password === sha1($password)){
               return $_SESSION['auth'] = $user->id;
            }
        }
        return false;
    }
    /**
     * Logged function
     * Vérification d'authentification de l'utilisateur
     * @return boolean true/false
     */
    public function logged(){
        return isset($_SESSION['auth']);
    }
    /**
     * Deconnexion Fonction
     * @return Session destroy
     */
    public function deconnexion(){
        return session_destroy();
    }
}