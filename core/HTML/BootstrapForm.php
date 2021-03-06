<?php

namespace Core\HTML;

class BootstrapForm extends Form {

    public function surround($html){
        return "<div class=\"form-group\" style='margin: 0 1% 0 0'>{$html}</div>";
    }

    /**
     * @param $name
     * @param $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        $label = '<label>' . $label . '</label>';
        if ($type === 'textarea'){
            $input = '<textarea class="form-control" name="' . $name . '">' . $this->getValue($name) . ' </textarea>';
        } else
            $input = '<input class="form-control" type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '">';
        return $this->surround($label . $input);
    }

    protected function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}