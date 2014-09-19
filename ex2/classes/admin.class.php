<?php

class Admin extends Users {
    public function __construct($user_level, $user_id) {
        parent::__construct($user_level, $user_id);
        $this->user_id = $user_id;
    }
    
    
}
?>
