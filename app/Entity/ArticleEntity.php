<?php

namespace App\Entity;

use Core\Entity\Entity;

/**
 * Class ArticleEntity
 * @package App\Entity
 */
class ArticleEntity extends Entity {

    /**
     * @return string
     * return url
     */
    public function getUrl(){
            return'index.php?p=posts.show&id=' .$this->id;
        }




}