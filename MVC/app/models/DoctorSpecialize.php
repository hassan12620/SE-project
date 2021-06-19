<?php
    class DoctorSpecialize
    {
        public $Spaciaize_ID;
        public $Doctor_ID;
        public $Specialize;

        public function __construct($id = '')
        {
            $this->db = new Database;
            $this->person=new Persons;
            $this->Specialize=new Specialization;
            if(!empty($id)){
                $this->Spaciaize_ID=$this->getAll($id);
                $this->Doctor_ID=$this->person->getUser($id);    
                $this->Specialize=$this->Specialization->GetSpecialization($id);
            }
        }

        public function getAll($id)
        {
            $this->db->query("select * where Spaciaize_ID='$id'");
            return $this->db->single();
        }



        public function InsertDoctorSpecialization($Doctor_ID,$Specialize)
        {
            
            
            $this->db->query("insert into specialization values('','$Doctor_ID','$Specialize')");
            return $this->db->execute();
        }

        public function Get($sid)
        {
            
            $data= $this->Specialize->Get($sid);
            $this->db->query("SELECT special.Specilization
            from special INNER JOIN Specilization on special.Spacialize_ID =Specilization.Spaciaize_ID
            where specialization.Spaciaize_ID= '$data'");
            return $this->db->single();
        }

        public function GetDoctorSpec($id)
        {
            $this->db->query("SELECT special.Specilization
            from special INNER JOIN specialization on special.Spacialize_ID =specialization.Spaciaize_ID
            where specialization.Doctor_ID = $id");
            return $this->db->resultSet();
            
        }

    }

?>