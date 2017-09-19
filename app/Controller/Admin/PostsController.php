<?php

namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;

/**
 * Class PostsController
 * @package App\Controller\Admin
 * use to apply actions on db
 */
class PostsController extends AppController {

    /**
     * PostsController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Article');
        $this->loadModel('Comment');
    }

    /**
     * check the $_SESSION['auth_valid']
     * get all comments & articles from db
     * use render to generate the view
     */
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

    /**
     * delete a article
     * use $_POST['id'] to select the post to delete
     * redirection to admin.index
     */
    public function delete(){
    $postTable = $this->Article;
    if (!empty($_POST)) {
        $result = $postTable->delete($_POST['id']);
        }
        header('Location: index?p=admin.posts.index');
        }

    /**
     * delete a comment
     * use $_POST['id'] to select the comment to delete
     * redirection to admin.index
     */
    public function deleteComment(){
        $postTable = $this->Comment;
        if (!empty($_POST)) {
            $result = $postTable->delete($_POST['id']);
        }
        header('Location: index?p=admin.posts.index');
    }

    /**
     * get a BootstrapForm
     * if $_POST not empty -> update $_GET['id']
     */
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

    /**
     * get a BootstrapForm object
     * if $_POST send
     * update the db with $_POST vars
     */
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
