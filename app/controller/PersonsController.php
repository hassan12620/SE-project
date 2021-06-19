<?php

require_once(__ROOT__ . "controller/Controller.php");

class PersonsController extends Controller{
	public function insert() {
        $first=$_REQUEST['name'];
        $last=$_REQUEST['lname'];
        $email=$_REQUEST['email'];
        $pass=$_REQUEST['password'];

		$this->model->SignUp($first,$last,$email,$pass);
	}

	public function edit() {
		$first = $_REQUEST['fn'];
		$last = $_REQUEST['ln'];
		$email = $_REQUEST['email'];
		$pass = $_REQUEST['password'];

		$this->model->editUser($first,$last,$email,$pass);
	}
	
	public function delete(){
		$this->model->deleteUser();
	}
}
?>
