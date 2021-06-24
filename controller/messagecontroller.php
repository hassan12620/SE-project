<?php
    REQUIRE_ONCE "../model/message.php";
    REQUIRE_ONCE "../controller/usercontroller.php";
    REQUIRE_ONCE "../model/users.php";
    REQUIRE_ONCE "../view/view.php";
    session_start();
    class messagecontroller extends users
    {
        
        public function contact(){
            
            $message = new message ;   
            $message->message=$_REQUEST['message'];
            $message->fname= $_REQUEST['name'];
            $message->lname= $_REQUEST['lname'];
            $message->email= $_REQUEST['email'];
    
    
            $message->contact();
        }
    }
    $cont= new messagecontroller;

    if($_GET['action']=='contact')
    {
        $cont->contact();
        header("location: ../contact-us.php");
    }

?>