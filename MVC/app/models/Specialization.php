<?php
 class Specialization
 {
    public $Specialization_ID;
    public $Specialization;

    public function __construct($id = '')
    {
        $this->db = new Database;

        if(!empty($id)){
            $data=$this->GetSpecialization($id);
            $this->Specialization_ID=$data['Spacialize_ID'];
            $this->Specialization=$data['Specilization'];
        }
    }

    public function GetSpecialization($id)
    {
        $this->db->query("select * from special where Spacialize_ID =$id");
        return $this->db->single()->Specilization;
    }

    public function Get()
    {
        $this->db->query("select Specilization from special ");
        return $this->db->resultSet();
    }

    public function AddSpecialization($Specialization)
    {
        $this->db->query("Insert into special values ('','$Specialization')");
        return $this->db->execute();
    }

    public function getAllSpecialization()
    {
        $this->db->query("select Specilization from special");
        return $this->db->resultSet();
    }
    // public function Getss($sid)
    // {
        
    //     $data= $this->Get($sid);
    //     $this->db->query("SELECT special.Specilization
    //     from special INNER JOIN specialization on special.Spacialize_ID  =specialization.Specialize 
    //     where specialization.Specialize = '$data'");
    //     //Orthodontics and dentofacial orthopedics
    //     return $this->db->single();
    // }

    public function getId($data)
    {
        $this->db->query("select Spacialize_ID from special where Specilization= '$data'");
        //Prosthodontics
        return $this->db->single();
    }

    

 }

?>