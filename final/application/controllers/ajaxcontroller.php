 <?php

class AjaxController extends Controller{
	
    protected $postObject, $userObject, $categoryObject, $commentObject;
        
        public function index(){
            $this->set('response', "Invalid Request");
        }
        
        public function get_post_content() {
            $this->postObject = new Post();
            $post = $this->postObject->getPost($_GET['pID']);
            $this->set('response', $post['content']);
        }
        
        public function get_comment_content() {
            $this->commentObject = new Comment();
            $comment = $this->commentObject->getComment($_GET['commentID']);
            $this->set('response', $comment['content']);
        }
}
?>
