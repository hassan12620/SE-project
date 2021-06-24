<?php
REQUIRE_ONCE "../model/doc.php";
REQUIRE_ONCE "../view/view.php";
session_start();
class doccontroller{
    public function add(){
        $doc = new doc;
		$doc->fname= $_REQUEST['name'];
		$doc->lname= $_REQUEST['lname'];
		$doc->email= $_REQUEST['email'];
        $doc->password=$_REQUEST['password'];
		$doc->level= $_REQUEST['level'];
        $doc->spec= $_REQUEST['spec'];
        
        $doc->Adddoctors();
    
        
    }
}
$cont= new doccontroller;
if($_GET['action']=='add')
{
    $cont->add();
    header("location: ../adminhome.php");
}