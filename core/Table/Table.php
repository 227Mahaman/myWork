<?php

namespace Core\Table;

use Core\Database\Database;

class Table
{
    protected $table;
    protected $db;

    /**
     * Ce constructeur nous permet
     * de recuperer le nom de la classe
     * puis remplace table par le vide
     * @param Database $db la connexion au bdd
     */
    public function __construct(Database $db){
        $this->db = $db;
        if(is_null($this->table)){
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name)) . 's';
        }
    }

    public function all(){
        return $this->query('SELECT * FROM ' . $this->table);
    }

    public function find($id){
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }
    /**
     * Update function
     * Modification des données
     * @param Int $id
     * @param String $fields
     * @return void
     */
    public function update($id, $fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id;
        $sql_part = implode(', ',$sql_parts);
        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id = ?", $attributes, true);
    }
    /**
     * Fonction Delete
     * @param Int id
     * @return suppression de l'élément
     */
    public function delete($id){
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id], true);
    }
    /**
     * Fonction Create
     * @param Array fields
     * @return la rêquete de création
     */
    public function create($fields){
        
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(', ',$sql_parts);
        return $this->query("INSERT INTO {$this->table} SET $sql_part", $attributes, true);
    }
    /**
     * Fonction Extract
     * Qui nous renvoie une liste des données de la table
     * @param String key
     * @param String value
     * @return Array return
     */
    public function extract($key, $value){
        $records = $this->all();
        $return = [];
        foreach($records as $v){
            $return[$v->$key] = $v->$value;
        }
        return $return;
    }
    /**
     * Query function
     * @param string $statement la requete
     * @param int $attributes le where
     * @param boolean $one
     * @return void
     */
    public function query($statement, $attributes = null, $one = false){
        if($attributes){
            return $this->db->prepare(
                $statement,
                $attributes,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        } else {
            return $this->db->query(
                $statement,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        }
    }
}