<?php
    class AppointmentSchedule
    {
        public $AppointmentID;
        public $Day;
        public $Doctor_ID;

        public function __construct($id = '')
        {
            $this->db = new Database;
            $this->DayModel=new Days;
            $this->personModel=new Persons;
            
            if(!empty($id)){
               $this->AppointmentID=$this->getAll($id);
               $this->Day=$this->DayModel->GetDayData($id);
               $this->Doctor_ID=$this->personModel->getUser($id);
                
            }
        }



        public function InsertAppointment($Day,$time, $Doctor)
        {
           // $this->DayModel=$this->LoadModel('days');
            $day=$this->DayModel->GetID($Day)->DayID;
            $this->db->query("insert into appointmentsschedule values ('','$day','$time','$Doctor')");
            return $this->db->execute();
        }

        public function getAll()
        {
            $this->db->query("select * from appointmentsschedule");
           return $this->db->resultSet();      
        }  

        public function GetOneApp($id)
        {
            $this->db->query("select * from appointmentsschedule where Appoitment_ID=$id");
            return $this->db->single();
        }
        public function EditAppointment($day,$time,$name,$id)
        {
            $this->db->query("update persons set Day=$day ,Time=$time ,Doctor_Name=$name Where Appoitment_ID=$id ");
            $this->db->single(); 
            return $this->db->execute();
        }
        public function DeleteApp($id)
        {
            $this->db->query("delete from appointmentsschedule where Appoitment_ID='$id'");
            return $this->db->execute();
        }

    }
?>