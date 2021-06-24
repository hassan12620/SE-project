<?php
REQUIRE_ONCE "../model/users.php";
REQUIRE_ONCE "../view/view.php";
session_start();
class usercontroller{
    public function signup(){
        $user = new users;
        
		$user->fname= $_REQUEST['name'];
		$user->lname= $_REQUEST['lname'];
		$user->email= $_REQUEST['email'];
		$user->password= $_REQUEST['password'];
        $conpass= $_REQUEST['confirmPassword'];
        if($user->password==$conpass)
        {
            $user->Adduser();
        }
    }

    public function login(){
        $user = new users;
		$user->email= $_REQUEST['email'];
		$user->password= $_REQUEST['password'];

        $result= $user->login();
        $row=mysqli_fetch_assoc($result);
        $_SESSION['id']=$row['id'];
        return $row;
    }
    public function edit(){
        $user = new users;
        $user->id=$_SESSION['id'];
		$user->fname= $_REQUEST['name'];
		$user->lname= $_REQUEST['lname'];
		$user->email= $_REQUEST['email'];
		$user->password= $_REQUEST['password'];
        $conpass= $_REQUEST['confirmPassword'];
        if($user->password==$conpass)
        {
            $user->updateprofile();
        }
    }
    public function add(){
        $user = new users;
		$user->fname= $_REQUEST['name'];
		$user->lname= $_REQUEST['lname'];
		$user->email= $_REQUEST['email'];
        $user->password=$_REQUEST['password'];
		$user->level= $_REQUEST['level'];
        $user->spec= $_REQUEST['spec'];
        
        $user->Adddoctors();
    
        
    }
}

    
$cont= new usercontroller;

if($_GET['action']=='signup')
{
    $cont->signup();
    header("location: ../login.php");
}
else if($_GET['action']=='login')
{
    $row=$cont->login();
    //$row=mysqli_fetch_assoc($result);
    $_SESSION['page']=$row['page'];
   // echo $row['page'];
    header("location: ../".$row['page']."");
}

else if($_GET['action']=='edit')
{
    $cont->edit();
    header("location: ../".$_SESSION['page']."");
}
else if($_GET['action']=='add')
{
    $cont->add();
    header("location: ../doctors.php");
}





?>