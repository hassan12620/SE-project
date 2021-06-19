<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/Movie.php");


class User extends Model {
	private $id;
	private $name;
	private $password;
	private $age;
	private $phone;
	private $movies;

	function __construct($id="") {
		$this->db = $this->connect();
		if($id!=""){
			$this->id = $id;
			$this->readUser($id);
			$this->readMovies();  
		}
	}
	
	function readUser($id){
		$sql = "SELECT * FROM user where ID=".$id;
		$result = $this->db->query($sql);
		if ($result->num_rows == 1){
			$row = $this->db->fetchRow();
			$this->name = $row["Name"];
			$_SESSION["Name"]=$row["Name"];
			$this->password=$row["Password"];
			$this->age = $row["Age"];
			$this->phone = $row["Phone"];
		}
		else {
			$this->name = "";
			$this->password="";
			$this->age = "";
			$this->phone = "";
		}
	}
	
	function readMovies(){
		$this->movies = array();
		$sql = "SELECT * FROM movie where User_ID=".$this->id;
		$result = $this->db->query($sql);
		if ($result->num_rows > 0){
			while ($row = $result->fetch_assoc()) {
				array_push($this->movies, new Movie($row["ID"]));
			}
		}
	}
	
	function getMovie($movie_id) {
		$this->readMovies();
		foreach($this->movies as $movie) {
			if ($movie_id == $movie->getID()) {
				return $movie;
			}
		}
	}

	function getMovies() {
		$this->readMovies();  
		return $this->movies;
	}
	
	function getName() {
		return $this->name;
	}
	function setName($name) {
		return $this->name = $name;
	}

	function getPassword() {
		return $this->password;
	}
	function setPassword($password) {
		return $this->password = $password;
	}

	function getAge() {
		return $this->age;
	}
	function setAge($age) {
		return $this->age = $age;
	}

	function getPhone() {
		return $this->phone;
	}
	function setPhone($phone) {
		return $this->phone = $phone;
	}

	function getID() {
		return $this->id;
	}
	
	function insertUser($name, $password, $age, $phone){
		$sql = "INSERT INTO user (name, password, age, phone) VALUES ('$name','$password', '$age', '$phone')";
		if($this->db->query($sql) === true){
			echo "Records inserted successfully.";
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
	
	function insertMovie($name, $year){
		//////////////////Complete/////////////////////////////
		$sql="insert into movie (User_ID,Name,Year) VALUES ('$this->id','$name','$year')";
		if ($this->db->query($sql)==true) {
			# code...
			echo"Records inserted successfully.";
		}
		else {
			# code...
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
	

	function editUser($name, $password, $age, $phone){
		$sql = "update user set name='$name',password='$password', age='$age', phone='$phone' where id=$this->id;";
		if($this->db->query($sql) === true){
			echo "updated successfully.";
			$this->readUser($this->id);
		} else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}

	function deleteUser(){
		$sql="delete from user where id=$this->id;";
		if($this->db->query($sql) === true){
			echo "deletet successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}

	
}