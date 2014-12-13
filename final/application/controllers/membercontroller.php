<?php

class MemberController extends Controller{
	
	public $userObject;
   
   	public function user($uID){

		$this->userObject = new User();
		$user = $this->userObject->getUser($uID);	    
	  	$this->set('user',$user);
   	}
	
	public function index(){
		
		$this->userObject = new User();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'Site Members');
		$this->set('users',$users);
	}
        
        public function update($uID) {
            $this->userObject = new User();
            $user = $this->update($uID);
            $this->set('profile', $user);
        }
}
?>
