<?php



class PersonsController extends Controller{
	private $personModel;
	public function __construct(){

        $this->personModel = $this->LoadModel('persons');
        
        
    }
	public function SignUp() {

		
			# code...
			if (isset($_POST['register'])) {
				# code...
				$first=$_REQUEST['name'];
				$last=$_REQUEST['lname'];
				$email=$_REQUEST['email'];
				$pass=$_REQUEST['password'];
				$this->personModel->insert($first,$last,$email,$pass);
				$this->loadView('pages/changePassword.php');
			}

			$this->loadView('pages/signUp');
		
	}

	public function edit() {
		$first = $_REQUEST['fn'];
		$last = $_REQUEST['ln'];
		$email = $_REQUEST['email'];
		$pass = $_REQUEST['password'];

		$this->personModel->editUser($first,$last,$email,$pass);
	}
	
	public function delete(){
		$this->personModel->deleteUser();
	}
}
?>
