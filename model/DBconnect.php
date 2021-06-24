<?php
  class dbconnect {
  	private $host = "localhost";
  	private $username = "root";
  	private $password = "";
  	private $database = "clinic";
  	private $connection;
  	private static $instance;

  	public static function getInstance() {
  		if(!self::$instance) {
  			self::$instance = new self();
  		}
  		return self::$instance;
  	}
  	private function __construct() {

  		  $this->connection = new mysqli($this->host, $this->username,$this->password, $this->database);

  		if(mysqli_connect_error()) {
  			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),E_USER_ERROR);
  		}
  	}

    function disconnect(){
        return $this->connection->close();
    }

  	public function getConnection() {
  		return $this->connection;
  	}
  }


?>
