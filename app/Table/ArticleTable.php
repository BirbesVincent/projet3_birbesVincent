<?php

namespace App\Table;

use Core\Table\Table;

/**
 * Class ArticleTable
 * @package App\Table
 */
class ArticleTable extends Table{

    /**
     * @var string
     * name of the table in db
     */
    protected $table = 'articles';

    /**
     * @return array|bool|mixed|\PDOStatement
     */
    public function getAllArticlesAndComments(){
        return $this->query("SELECT articles.id,articles.title,articles.content,articles.date, COUNT(comments.id) AS nb_com FROM articles LEFT JOIN comments
        ON articles.id = comments.articles_id GROUP BY articles.id ORDER BY articles.date");
    }

    /**
     * @return array|bool|mixed|\PDOStatement
     */
    public function getArticlesAndComments(){
        return $this->query("SELECT articles.id,articles.title,articles.content,articles.date, COUNT(comments.id) AS nb_com FROM articles LEFT JOIN comments
        ON articles.id = comments.articles_id GROUP BY articles.id ORDER BY articles.date LIMIT 5");
    }



}