<?php
    class UserType{
        public $UserTypeID;
        public $Name;
        public function __construct($id = '')
        {
            $this->db = new Database;
            $this->personModel = new Persons();
            if(!empty($id)){
                $data = $this->personModel->getUser($id);
                $this->UserTypeID=$data['UserTypeID'];
                $this->UserTypeID=$data['Name'];
            }
        }
        public function getUserType($id)
        {
            $this->db->query("select Type from persons where Id=$id");
            return $this->db->single()->Type;
        }

    }
?>