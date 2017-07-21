<?php

namespace App\Entity;

use Core\Entity\Entity;

class ArticleEntity extends Entity {

        public function getUrl(){
            return'index.php?p=post.detail&id=' .$this->id;
        }




}