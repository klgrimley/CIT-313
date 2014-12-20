<?php

class CategoryController extends Controller {
    
    public $categoryObject;

public function index() {
        $this->categoryObject = new Category();
        $categories = $this->categoryObject->getCategories();
        $this->set('title', 'Categories');
        $this->set('categories', $categories);
    }
    
    public function categories($categoryID) {
        $this->categoryObject = new Category();
        $categories = $this->categoryObject->getCategory($categoryID);
        $this->set('title', 'This is a test');//$categories['name'].' Articles');
        $this->set('categories', $categories);
    }
}
?>
