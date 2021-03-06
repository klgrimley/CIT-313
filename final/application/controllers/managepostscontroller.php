<?php

class ManagePostsController extends Controller {

    public $postObject, $categoryObject;
    protected $access = 1;

    public function index() {
        $this->postObject = new Post();
        $posts = $this->postObject->getAllPosts();
        $this->set('posts', $posts);
    }

    public function add() {

        $this->postObject = new Post();
        $this->getCategories();
        $this->set('task', 'save');
    }

    public function save() {

        $this->postObject = new Post();
        $data = array('title' => $_POST['post_title'], 'content' => $_POST['post_content'], 'categoryID' => $_POST['post_category'], 'date' => $_POST['post_date'], 'uID' => $_POST['uID']);
        $result = $this->postObject->addPost($data);
        $this->set('message', $result);
    }

    public function edit($pID) {

        $this->postObject = new Post();
        $post = $this->postObject->getPost($pID);
        $this->set('pID', $post['pID']);
        $this->set('title', $post['title']);
        $this->set('content', $post['content']);
        $this->set('date', $post['date']);
        $this->set('category', $post['categoryID']);
        $this->set('task', 'update');
    }

    public function getCategories() {
        $this->postObject = new Categories();
        $categories = $this->postObject->getCategories();
        $this->set('categories', $categories);
    }

    public function update() {
        $data = array('title' => $_POST['post_title'], 'content' => $_POST['post_content'], 'categoryID' => $_POST['post_category'], 'date' => $_POST['post_date'], 'uID' => $_POST['uID']);
        $this->postObject = new Post();
        $result = $this->postObject->updatePost($data);
        $outcome = $this->postObject->getAllPosts();
        $this->set('posts', $outcome);
        $this->set('message', $result);
        $this->getCategories();
        $this->set('task', 'update');
    }
    
    public function delete($pID) {
        $pID = $_GET['pID'];
        $this->postObject = new Post();
        $post = $this->postObject->delete($pID);
        $this->set('pID', $post);
    }

}
