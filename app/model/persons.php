<?php
require_once(__ROOT__ . "model/Model.php");
Class Persons extends Model{
    private $ID;
    private $fn;
    private $ln;
    private $UserType_Obj;
    private $email;
    private $password;
     
    function  __construct($id="")
    {
        $this->db = $this->connect();
        if ($id!="") {
            # code...
               // $db_handle = new DBH();
                $sql="SELECT * FROM persons WHERE Id=$id";
                $person= $this->db->query($sql);
                if ($row=mysqli_fetch_array($person)) {
                    # code...
                    $this->ID=$row['Id'];
                    $this->fn=$row['First_Name'];
                    $this->ln=$row['Last_Name'];
                    $this->email=$row['Email'];
                    $this->password=$row['Password'];
                    $this->UserType_Obj=new UserType ($row['Type']);
                }
        }
    }

     function SignUp($first,$last,$email,$pass)
    {
       // $db_handle = new DBH();
        $sql="insert into
             persons (First_Name,Last_Name,Email,Password,Type) 
             values('$first','$last','$email','$pass',2)";
        if ($this->db->query($sql)==TRUE)
        {
            echo "signued Up Successfully";
        }
        else {
            # code...
            echo "ERROR: Could not able to execute $sql. " . $conn->error;
        }
        
    }
     function Login($email,$pass)
    {
        //$db_handle = new DBH();
        $sql="select * from
              persons where 
              Email='$email' And Password='$pass'";
        $select=$this->db->query($sql);
        if ($row=mysqli_fetch_array($select)) {
            # code...
            return new Persons ($row[0]);
        }
        else {
            # code...
            return NULL;
        }
    }

    function getFirstName() {
		return $this->fn;
	}

	function setFirstName($fn) {
		return $this->fn = $fn;
	}

    function getLastName() {
		return $this->ln;
	}
	function setLastName($ln) {
		return $this->ln = $ln;
	}

	function getPassword() {
		return $this->password;
	}
	function setPassword($password) {
		return $this->password = $password;
	}

	function getEmail() {
		return $this->email;
	}
	function setEmail($email) {
		return $this->email = $email;
	}

	function getID() {
		return $this->ID;
	}

}

class UserType extends Model
{
    private $ID;
    private $Name;
    //public $ArrayOfPages;

    function  __construct($id)
    {
        if ($id!="") {
            # code...
                //$db_handle = new DBH();
                $sql="SELECT * FROM usertype WHERE ID=$id";
                $type= $this->db->query($sql);;
                if ($row=mysqli_fetch_array($type)) {
                    # code...
                    $this->ID=$row['Id'];
                    $this->Name=$row['Name'];
                }
        }
    }

    function getName() {
		return $this->name;
	}

	function setName($name) {
		return $this->name = $name;
	}

    function getID() {
		return $this->ID;
	}



}

?>
