<?php

class BlogController extends Controller {

    public $postObject;

    public function post($pID) {
        $this->postObject = new Post();
        $post = $this->postObject->getPost($pID);
        $this->set('post', $post);
        $comments = $this->postObject->getComments($pID);
        $this->set('comments', $comments);
    }

    public function index() {
        $this->postObject = new Post();
        $posts = $this->postObject->getAllPosts();
        $this->set('title', 'Blog Archive');
        $this->set('posts', $posts);
    }

    public function comments($pID) {
        $this->postObject = new Post();
        $comments = $this->postObject->getComments($pID);
        $this->set('comments', $comments);
    }
    
    public function categories($categoryID) {
        $this->categoryObject = new Category();
        $categories = $this->categoryObject->getCategory($categoryID);
        $this->set('title', 'This is a test');//$categories['name'].' Articles');
        $this->set('categories', $categories);
    }

}

?>
