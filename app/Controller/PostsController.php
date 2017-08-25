<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;
use Core\HTML\BootstrapForm;

/**
 * Class PostsController
 * @package App\Controller
 * permet
 */
class PostsController extends AppController {

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Article');
        $this->loadModel('Comment');
    }

    public function archives(){
        $posts = $this->Article->getAllArticlesAndComments();
        $this->render('articles.home', compact('posts'));
    }

    public function show(){
        $post = $this->Article->findById($_GET['id']);
        $allComment = $this->Comment;
        $comments = $this->Comment->findAllCommentsByArticle($_GET['id']);

        if (!empty($_POST)){
            $result = $allComment->create([
                'author' => $_POST['author'],
                'content' => $_POST['content'],
                'articles_id' => $_GET['id'],
                'report' => 0
            ]);
            if($result){
                $_POST = null;
                return $this->show();
            }
        }
        $this->render('articles.Article', compact('post','allComment', 'comments', 'footer'));
    }

    public function report(){
        $postTable = $this->Comment;
        if (!empty($_POST)) {
            $result = $postTable->report($_POST['id']);
        }
        $res = new\App\Controller\PostsController;
        return $res->index();
    }

    public function index(){
            $posts = $this->Article->getArticlesAndComments();
            $this->render('articles.home', compact('posts'));
    }
}