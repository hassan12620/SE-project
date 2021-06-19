<?php
    class Navbar{
        public $Nav_ID;
        public $Page_ID;
        public $Type_ID;
        public function __construct($id = '')
        {
            $this->db = new Database;
            $this->UserType = new UserType;
            if(!empty($id)){
                $data = $this->UserType->getUserType($id);
                $this->Nav_ID=$data['Nav_ID'];
                $this->Page_ID=$data['Page_ID'];
                $this->Type_ID=$data['Type_ID'];

            }
        }

        public function ViewNavBar($id)
        {
            if (empty($id)) {
                # code...
                
            }
        }


    }
?>