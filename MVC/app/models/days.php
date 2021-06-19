<?php
    class Days
    {
        public $DayID;
        public $Days;

        public function __construct($id = '')
        {
            $this->db = new Database;
    
            if(!empty($id)){
                $data = $this->GetDayData($id);
                $this->appsche=new AppointmentSchedule;
                $this->DayID=$data['DayID'];
                $this->Days = $data['Days'];
            }
        }


        public function GetDayData($id)
        {
            $this->db->query("select Days from days Where DayID=$id");
            return $this->db->single()->Days;
        }

        public function GetID($Day)
        {
                $this->db->query("SELECT DayID FROM days WHERE Days='$Day'");
                return $this->db->single();
         
        }

        public function ViewDays()
        {
            $this->db->query("select Days from days");
            return $this->db->resultSet();
        }
        public function GetDay($dayid)
        {
            
            $data= $this->GetDayData($dayid);
            $this->db->query("SELECT days.Days
            from Days INNER JOIN appointmentsschedule on days.DayID=appointmentsschedule.Day
            where appointmentsschedule.Day= $data");
            return $this->db->single();
        }

    }

?>