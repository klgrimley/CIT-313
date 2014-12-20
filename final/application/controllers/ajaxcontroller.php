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
        
        public function get_weather_results() {
            $xml = simplexml_load_file('http://api.worldweatheronline.com/free/v2/weather.ashx?q='.$_POST['zip'].'&format=xml&num_of_days=2&key=d11aad8dc3cac2c7db9b3d6e99c84');
            $this->set('response',$xml);
            //$this->set('weather', $xml);
        }
}
?>
