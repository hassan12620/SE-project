<?php

REQUIRE_ONCE ("DBconnect.php");

class app{
    public $docname;
    public $day;
    public $time;
    public $date;

    public function addSlots(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "INSERT INTO timeslot (`id`,`doc_name`,`day`,`time`,`date`) VALUES (null,'$this->docname,'$this->day','$this->time','$this->date')";
        $result= $mysqli->query($query); 
        return $result;
    }

    public function viewslots(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "SELECT * from timeslot";
        $result= $mysqli->query($query);
        return $result;
    }
}