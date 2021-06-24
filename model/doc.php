<?php

REQUIRE_ONCE ("DBconnect.php");
class doc{
    public $userID;
    public $fname;
    public $lname;
    public $email;
    public $password;
    public $level;
    public $spec;


    public function Adddoctors(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "INSERT INTO doctors (`id`,`fname`,`lname`,`email`,`pass`,`level`,`specification`) VALUES (null,'$this->fname','$this->lname','$this->email','$this->password','$this->level','$this->spec')";
        $result= $mysqli->query($query);
        return $result;
    }
    
    public function Selectdoctors(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "SELECT * FROM doctors";
        $result= $mysqli->query($query);
        return $result;
    }

}
?>