<?php

namespace App\Entity;

use Core\Entity\Entity;

/**
 * Class CommentEntity
 * @package App\Entity
 */
class CommentEntity extends Entity {

    /**
     * @return string
     * return url
     */
    public function getUrl(){
        return'index.php?p=articles&id=' .$this->articles_id;
    }





}