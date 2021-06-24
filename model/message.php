<?php

REQUIRE_ONCE ("DBconnect.php");
session_start();
 class message  
 {
    public $reportID;
    public $fname;
    public $lname;
    public $email;
    public $message;
    public function contact(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "INSERT INTO reports (`reportID`,`fname`,`lname`,`email`,`message`,`recieverID`) VALUES (null,'$this->fname','$this->lname','$this->email','$this->message','1'  )";   
        $result= $mysqli->query($query);
        return $result;
    }
 }

?>