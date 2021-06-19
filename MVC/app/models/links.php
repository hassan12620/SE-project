<?php
    class links
    {
        public $Page_ID;
        public $Link_Address;
        public $Real_Address;
        //public $ArrayOfPages;
        public function __construct($id = '')
        {
            $this->db = new Database;
            $this->UserTypeModel=new UserType();
            if(!empty($id)){
                $data=get($id);
                $this->Page_ID=$data['Page_ID'];
                $this->Link_Address=$data['Link_Address'];
                $this->Real_Address=$data['Real_Address'];
                
            }
        }
        public function get($id)
        {
            $this->db->query("select * from pages where Page_ID=$id");
            return $this->db->single();

        }
        public function getPage($id)
        {
            
            $type=$this->UserTypeModel->getUserType($id);
            $this->db->query("SELECT pages.Real_Address, pages.Link_Address
			from pages INNER JOIN navbar on pages.Page_ID=navbar.Page_ID
			where navbar.Type_ID= $type");
            return $this->db->resultSet();
        }
        public function getPageViewer()
        {
            $this->db->query("SELECT pages.Real_Address, pages.Link_Address
			from pages INNER JOIN navbar on pages.Page_ID=navbar.Page_ID
			where navbar.Type_ID= 4");
            return $this->db->resultSet();
        }
    }

?>