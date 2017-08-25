<?php

namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;

class PostsController extends AppController {

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Article');
        $this->loadModel('Comment');
    }

    public function index(){
        if ($_SESSION['auth_valid'] === false || empty($_SESSION['auth_valid'])){
            header('Location:index.php');
        }
        $success_auth = true;
        $posts = $this->Article->all();
        $comments = $this->Comment->all();
        $reportedComments = $this->Comment->AllReportedComments();
        $this->render('admin.articles.index', compact('posts','comments', 'reportedComments', 'success_auth'));
    }

    public function delete(){
    $postTable = $this->Article;
    if (!empty($_POST)) {
        $result = $postTable->delete($_POST['id']);
    }
    return $this->index();
    }

    public function deleteComment(){
        $postTable = $this->Comment;
        if (!empty($_POST)) {
            $result = $postTable->delete($_POST['id']);
        }
        return $this->index();
    }

    public function edit(){
        $postTable = $this->Article;
        if (!empty($_POST)){
            $result = $postTable->update($_GET['id'], [
                'title' => $_POST['title'],
                'content' => $_POST['content']
            ]);
            if($result){
                return $this->index();
            }
        }
        $post = $postTable->findById($_GET['id']);
        $form = new BootstrapForm($post);
        $this->render('admin.articles.edit', compact('postTable', 'form' ));
    }

    public function addPost()
    {
        $postTable = $this->Article;
        if (!empty($_POST)) {
            $result = $postTable->create([
                'title' => $_POST['title'],
                'content' => $_POST['content']
            ]);
            if ($result) {
                $this->index();
            }
        } else {
            $form = new BootstrapForm($_POST);
            $this->render('admin.articles.edit', compact('postTable', 'form'));
        }
    }
}
