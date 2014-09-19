<?php

class Users {
    protected $user_id;
    protected $user_type;
    protected $first_name;
    protected $last_name;
    protected $email_address;
    protected $user_level;
    
    public function __construct($user_level) {
        $this->user_level = $user_level;
    }
    
    public function getUser_id() {
        return $this->user_id;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function getUser_type() {
        return $this->user_type;
    }

    public function setUser_type($user_type) {
        $this->user_type = $user_type;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    public function getEmail_address() {
        return $this->email_address;
    }

    public function setEmail_address($email_address) {
        $this->email_address = $email_address;
    }

    public function getUser_level() {
        return $this->user_level;
    }

    public function setUser_level($user_level) {
        $this->user_level = $user_level;
    }

    public function __destruct() {
        $this->user_level;
    }

}
?>
