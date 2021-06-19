<?php
    class Services
    {
        public $ServiceName;
        public $ServiceImage;
        public $ServiceDescription;

        public function __construct($id = '')
        {
            $this->db = new Database;
    
            if(!empty($id)){
                $data = $this->getService($id);
                $this->ServiceName=$data['ServiceName'];
                $this->ServiceImage=$data['ServiceImage'];
                $this->ServiceDescription=$data['ServiceDescription'];
            }
        }

        public function getService($id)
        {
            $this->db->query("select * from Services where Service_ID=$id");
            $this->db->single();
        }

        public function InsertService($name,$image,$desc)
        {
            $this->db->query("insert into Services values('','$name','$image','$desc')");
            return $this->db->execute();
        }

        public function DeleteService($id)
        {
            $this->db->query("delete from Services where Service_ID=$id");
            return $this->db->execute();
        }
    }

?>