<?php

class controller {
    public $load;
    public $model;
    
    function __construct() {
        $this->load = new Load();
        $this->user = new User();
        $this->home();
    }
    
    function home() {
        $data = $this->user->getName('001', 'Kevin', 'Grimley', 'kevin@kevingrimley.com', 'user');
        $this->load->view('view.php',$data);
    }
    
    
}
?>
