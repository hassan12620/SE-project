<?php
class Pages extends Controller{
    public $personModel;
    //public $pagesModel;
    public $daysModel;
    public $appSchedule;
    public $specializeModel;
    public $specializeDoctorModel;
    public $ServicesModel;
    public $LinksModel;
    public $UserType;
    public function __construct(){
        $this->personModel = $this->LoadModel('persons');
       // $this->pagesModel = $this->LoadModel('pagesNav');   
       $this->UserType=$this->LoadModel('UserType');
       $this->daysModel=$this->LoadModel('days');
       $this->appSchedule=$this->LoadModel('AppointmentSchedule');
       $this->specializeModel=$this->LoadModel('Specialization');
       $this->specializeDoctorModel=$this->LoadModel('DoctorSpecialize');
       $this->ServicesModel=$this->LoadModel('Services');
       $this->LinksModel=$this->LoadModel('links');
    }


	public function changePassword() {
        //echo $this->personModel->fname;
        if (isset($_POST['edit'])) {
            # code...
             $_SESSION['id'];
            $first = $_REQUEST['efname'];
            $last = $_REQUEST['elname'];
            $email = $_REQUEST['e_email'];
            $pass = $_REQUEST['epassword'];
            $check=$this->personModel->editUser($_SESSION['id'],$first,$last,$email,$pass);
            if ($check) {
                # code...
                echo 'alert("Data Updated Successfully")';
                $this->loadView('pages/changePassword');  
            }
            
            
        }
        $this->loadView('pages/changePassword');

	}
   

    public function signUp()
     {

	
        # code...
        if (isset($_POST['register'])) {
            # code...
            $_REQUEST['name'];
            $_REQUEST['lname'];
            $_REQUEST['email'];
            $_REQUEST['password'];
            $_REQUEST['confirmPassword'];
            if(!preg_match("/^[a-zA-Z]*$/", $_REQUEST['name'])||!preg_match("/^[a-zA-Z]*$/", $_REQUEST['lname']))
            {
                echo '<script>alert(" Invalid Characters !")</script>';
                $this->loadView('pages/signUp');
            }
            elseif ($this->personModel->EmailCheck($_REQUEST['email']) )
            {
                echo '<script>alert(" There is already a user with that email! !")</script>';
                $this->loadView('pages/signUp');
            }
            elseif($_REQUEST['password']!==$_REQUEST['confirmPassword'])
            {
                echo '<script>alert("Passwords Did Not Match!!")</script>';
                $this->loadView('pages/signUp');
            }
            else {
                # code...
                $$this->personModel->insert($_REQUEST['name'],$_REQUEST['lname'],$_REQUEST['email'],$_REQUEST['password']);
                $_SESSION['id'] =$this->personModel->getLastUser();
                header('Location: ./changePassword');
            }
           
            
        }
        
        $this->loadView('pages/signUp');
        
    
    }
    public function login(){

        if(isset($_POST['login'])){
           // $req = $_POST;
            if (empty($_REQUEST['email']) || empty($_REQUEST['password']) ) {
                # code...
                echo "<script>alert('Please Fill Dataa');</script>";
                $this->loadView('pages/login');
            }
            else {
                # code...
            
            $check=$this->personModel->auth( $_REQUEST['email'],  $_REQUEST['password']);
            if ($check) {
                # code...
                $_SESSION['id']=$check;
                if($this->UserType->getUserType($_SESSION['id']) ==1)
                {
                    echo "<script>alert('LoggedIn Successfully As A Doctor');</script>";
                    $this->loadView('pages/navBar' );
                }
                elseif($this->UserType->getUserType($_SESSION['id']) ==2)
                {
                    echo "<script>alert('LoggedIn Successfully As A User');</script>";
                    $this->loadView('pages/changePassword' );
                }
                else
                {
                    echo "<script>alert('LoggedIn Successfully As A User');</script>";
                    $this->loadView('pages/Appointments' );
                }
               
                
            }
            else {
                # code...
                echo "<script>alert('Appoitment Deleted Successfully');</script>";
                header('Location: ./login' );
                
            }
        }
            
            return;
        }
        $this->loadView('pages/login');
    }

    public function contact(){
        $this->loadView('pages/contact-us');
    }

   public function LogOut()
   {
       session_start();
       session_destroy();
       header('Location: ./login' );
    
   }
    
   public function services(){
    if (isset($_POST['addService'])) {
        # code...
        $_REQUEST['sname'];
        $_REQUEST['sdesc'];
        $_REQUEST['filese'];
        $_REQUEST['filese']['photo'];
        $check=$this->ServicesModel->InsertService($_REQUEST['sname'], $_REQUEST['filese'],$_REQUEST['sdesc']);
        if ($check) {
            # code...
            
                $errors = array();
                
                $file_size = $_REQUEST['filese']['size'];
                $file_tmp = $_REQUEST['filese']['tmp_name'];
                $file_type = $_REQUEST['filese']['type'];

        
                if(empty($errors) == true){
                    $destination=move_uploaded_file($file_tmp, "C:/xampp/htdocs/SeProjectPractice/MVC/app/images/". $_REQUEST['filese']);	
                    move_uploaded_file($file_tmp, $destination);
  
                }
        
            
            header('Location: ./login' );
        }
    }
 

    $this->loadView('pages/services');
}


    public function Appointments()
    {
        if (isset($_POST['AddAppointment'])) {
            # code...
            $_REQUEST['Days'];
            $_REQUEST['Doctors'];
            $_REQUEST['time'];
            if ( $_REQUEST['time'] >0) {
                # code...
            
                $check=$this->appSchedule->InsertAppointment( $_REQUEST['Days'], $_REQUEST['time'], $_REQUEST['Doctors']);
                if ($check) {
                    # code...
                    echo "<script>alert('Appoitment Added Successfully');</script>";
                }
                else {
                    # code...
                    echo "<script>alert('Error In Adding An Appointment Please re-check the data you enterted');</script>";
                }
            }
            else {
                # code...
                echo "<script>alert('Time Can Not Be Equal To Zeroo!!');</script>";
            }
            $this->loadView('pages/User_home');
        }

        else if(isset($_POST['DeleteAppointment']))
        {
      
            foreach($_POST['delete'] as $d)
            {
               
                
                    $check=$this->appSchedule->DeleteApp($d);
                    
                    if ($check) 
                    {
                        echo "<script>alert('Appoitment Deleted Successfully');</script>";
                        $this->loadView('pages/User_home' );
                        
                    } 
                
            }
            
        }
        // else if(isset($_POST['editApp']))
        // {
           
        //     foreach($_POST['editApp'] as $e)
        //     {
                
        //         $check=$this->appSchedule->EditAppointment( $_REQUEST['Days'], $_REQUEST['time'], $_REQUEST['Doctors'],$e);
        //         $this->loadView('pages/EditAppointment' );  
                    
        //             if ($check) 
        //             {
        //                 echo "<script>alert('Appoitment Edited Successfully');</script>";
        //                 $this->loadView('pages/User_home' );
                        
        //             } 
                
        //     }
            
        // }
        $this->loadView('pages/User_home');
    }

    public function EditAppointment()
    {
        $this->loadView('pages/EditAppointment');
    }
    public function navBar()
    {
        $this->loadView('pages/navBar');
    }
    public function Doctors()
    {
        if (isset($_POST['AddDoctorCard'])) {
            # code...
            $_REQUEST['viewSpecilization'];
            $_REQUEST['docfname'];
            $_REQUEST['doclname'];
            $e= $_REQUEST['docemail'];
           $p= $_REQUEST['docpass'];
            $_REQUEST['photo'];
            $_REQUEST['Description'];
            //('','$fname', '$lname','1', '$email','$password','','$desc')
            
          $check =$this->personModel->insertDoctor( $_REQUEST['docfname'],$_REQUEST['doclname'],$e,$p,$_REQUEST['photo'], $_REQUEST['Description']);
         
          if ($check) {
              # code...
              $id=$this->personModel->auth( $e,  $p);
              //echo $this->specializeModel->getId($_REQUEST['viewSpecilization'])->Spacialize_ID;
              var_dump($this->specializeModel->getId($_REQUEST['viewSpecilization'])->Spacialize_ID);
              $spec=$this->specializeModel->getId($_REQUEST['viewSpecilization'])->Spacialize_ID ;
              $check1=$this->specializeDoctorModel->InsertDoctorSpecialization($id,$spec);
              if($check1)
              {
                echo "<script>alert('Doctor Added Successfully!!');</script>";
                
              }

              //var_dump($this->specializeDoctorModel->InsertDoctorSpecialization($id,$spec));
             
              
          }
        		 
        }
        $this->loadView('pages/Doctors');
    }


    

}
