<?php

namespace Core\HTML;

class BootstrapForm extends Form {

    public function surround($html){
        return "<div class=\"form-group\">{$html}</div>";
    }

    /**
     * @param $name
     * @param $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surround(
            '<label>' . $label . '</label>' .
              '<input class="form-control" type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '">'
        );
    }

    protected function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}