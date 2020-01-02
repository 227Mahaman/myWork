<?php

namespace Core\HTML;

class BootstrapForm extends Form
{
    /**
     * @param string $html code html à entourer
     * @return string
     */
    protected function surrond($html){
        return "<div class=\"form-group\">{$html}</div>";
    }
    /**
     * Input Function
     * Elle prend en parametre le name,
     * le label et les options
     * @param string $name
     * @param string $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label = '<label>' . $label . '</label>';
        if($type === 'textarea'){
            $input = '<textarea name="'. $name .'" class="form-control">' . $this->getValue($name) . '</textarea>';
        } else {
            $input = '<input type="' . $type . '" name="'. $name .'" value="'.$this->getValue($name).'" class="form-control">';
        }

        return $this->surrond($label . $input);
    }

    public function select($name, $label, $options){
        $label = '<label>' . $label . '</label>';
        $input = '<select class="form-control" name="'. $name . '">';
        foreach($options as $k => $v){
            $attributes = '';
            if($k == $this->getValue($name)){
                $attributes = ' selected';
            }
            $input .= "<option value='$k'$attributes>$v</option>";
        }
        $input .= '</select>';
        return $this->surrond($label . $input);
    }
    /** 
     * @return void
     */
    public function submit(){
        return $this->surrond('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}