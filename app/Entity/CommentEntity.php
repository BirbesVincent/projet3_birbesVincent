<?php

namespace App\Entity;

use Core\Entity\Entity;

class CommentEntity extends Entity {

    public function getUrl(){
        return'index.php?p=articles&id=' .$this->articles_id;
    }





}