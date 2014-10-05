<?php

abstract class Model {
    
    protected $userID;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $role;
    
    public function __construct() {
        // We will revisit this later.
    }
    
    public function __set($name, $value) {
        
    }
    
    public function __get($name) {
        
    }

    public function __destruct() {
        
    }

//    function getName() {
//
//        return array(
//            'first' => 'Kevin',
//            'last' => 'Grimley'
//        );
//    }

}

?>
