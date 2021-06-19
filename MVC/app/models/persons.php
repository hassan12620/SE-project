<?php

Class Persons {
    public $db;
    public $Id;
    public $First_Name;
    public $Last_Name;
    public $Type;
    public $Password;
    public $Email;

    public function __construct($id = '')
    {
        $this->db = new Database;

        if(!empty($id)){
            $data = $this->getUser($id);

            $this->Id=$data['Id'];
            $this->First_Name = $data['First_Name'];
            $this->Last_Name = $data['Last_Name'];
            $this->Type=$data['Type'];
            $this->Email = $data['Email'];
            $this->Password = $data['Password'];
        }
    }

    public function auth($email,$password)
    {
            $this->db->query("SELECT Id FROM persons WHERE Email='$email' AND Password='$password' ");
            return $this->db->single()->Id;
     
    }

    public function insert($fname, $lname, $email,$password)
    {
        $this->db->query("INSERT INTO persons VALUES('','$fname', '$lname','2', '$email','$password','',' ')");
        return $this->db->execute();
    }

    public function insertAdmin($fname, $lname, $email,$password)
    {
        $this->db->query("INSERT INTO persons VALUES('','$fname', '$lname','3', '$email','$password',' ','')");
        return $this->db->execute();
    }

    public function insertDoctor($fname, $lname, $email,$password,$image,$desc)
    {
        $this->db->query("INSERT INTO persons VALUES('','$fname', '$lname','1', '$email','$password','','$desc')");
        return $this->db->execute();
    }

    public function getUser($id)
    {
        $this->db->query("SELECT * FROM persons WHERE Id='$id' ");
        return $this->db->single();
    }
    public function editUser($id,$fname,$lname,$email,$password)
    {
        $check = $this->getUser($id);
        if($check){
            $this->db->query("update persons set First_Name=:fname ,Last_Name=:lname ,Email=:email ,Password=:password Where Id=:id ");
            $this->db->bind(':fname',$fname);
            $this->db->bind(':lname',$lname);
            $this->db->bind(':email',$email);
            $this->db->bind(':password',$password);
            $this->db->bind(':id',$id);
            
            return $this->db->execute();
        }
        return false;
    }

    public function GetDoctors()
    {
        $this->db->query("SELECT * FROM persons WHERE Type='1' ");
        return $this->db->resultSet();
    }
    // public function editAdmin($id)
    // {
    //     $this->db->query("update persons set First_Name='.$this->fname.',Last_Name='.$this->lname.',Email='.$this->email.',Password=".$this->password." Where Id='.$this->Id.' and Type='3'");
    //     $this->db->single()->Id;
    //     return $this->db->execute();
    // }

    // public function editDoctor($id)
    // {
    //     $this->db->query("update persons set First_Name='.$this->fname.',Last_Name='.$this->lname.',Email='.$this->email.',Password=".$this->password." Where Id=$this->Id and Type='1'");
    //     $this->db->single()->Id;
    //     return $this->db->execute();
    // }

    public function EmailCheck($email)
    {
        $this->db->query("select Email from persons Where Email='$email'");
        return $this->db->single();
    }
    public function getLastUser()
    {
        $this->db->query("SELECT Id FROM persons ORDER BY Id DESC");
        return $this->db->single()->Id;
    }



}



?>
