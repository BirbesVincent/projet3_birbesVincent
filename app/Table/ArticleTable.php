<?php

namespace App\Table;

use Core\Table\Table;

class ArticleTable extends Table{

    protected $table = 'articles';

    public function getArticlesAndComments(){
        return $this->query("SELECT articles.id,articles.title,articles.content,articles.date, COUNT(comments.id) AS nb_com FROM articles LEFT JOIN comments
 ON articles.id = comments.articles_id GROUP BY articles.id ORDER BY articles.date");
    }



}