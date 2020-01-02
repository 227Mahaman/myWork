<?php
/**
 * Class Form
 * permet de générer un formulaire rapidement et simplement
 */
namespace Core\HTML;

class Form
{
    /**
     * @var array données utilisées par le formulaire
     */
    protected $data;
    /**
     * @var string Tag utilisé pour entourer les champs
     */
    protected $surrond = 'p';
    
    /**
     * @param array $data
     */
    public function __construct($data = array()){
        $this->data = $data;
    }

    /**
     * @param string $html code html à entourer
     * @return string
     */
    protected function surrond($html){
        return "<{$this->surrond}>{$html}</{$this->surrond}>";
    }

    /**
     * GetValue Function
     * Verifie si les données
     * sont de type objet avant
     * de retourne une/des valeurs
     * en fonction du type
     * @param string $index index de la valeur à récupérer
     * @return void
     */
    protected function getValue($index){
        if(is_object($this->data)){
            return $this->data->$index;
        }
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
    /**
     * @param string $name
     * @param string $label
     * @param array $options
     * @return void
     */
    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surrond(
            '<input type="' . $type . '" name=" ' . $name . ' " value="' . $this->getValue($name) . '">'
        );
    }
    /** 
     * @return void
     */
    public function submit(){
        return $this->surrond('<button type="submit">Envoyer</button>');
    }
    
}