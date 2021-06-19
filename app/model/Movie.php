<?php
require_once(__ROOT__ . "model/Model.php");

class Movie extends Model {
	private $id;
	private $name;
	private $year;

	function __construct($id) {
		$this->id = $id;
		$this->db = $this->connect();
		$this->readMovie($id);
	}
	
	function readMovie($id){
		//////////////////Complete/////////////////////////////
		$sql="select * from movie where id=$id";
		$result=$this->db->query($sql);
		if ($result->num_rows==1) {
			# code...
			$row=$this->db->fetchRow();
			$this->name=$row['Name'];
			$_SESSION['Name']=$row['Name'];
			$this->year=$row['Year'];
		}
		else {
			# code...
			$this->name="";
			$this->year="";
		}
	}

	function getName() {
		return $this->name;
	}	
	function setName($name) {
		return $this->name = $name;
	}

	function getYear() {
		return $this->year;
	}
	function setYear($year) {
		return $this->year = $year;
	}

	function getID() {
		return $this->id;
	}
	
	function editMovie($name, $year){
		//////////////////Complete/////////////////////////////
		$sql="update movie set Name='$name',Year='$year' where User_ID=$this->id";
		if ($this->db->query($sql)) {
			# code...
			echo"Movies Updated Successfully";
			$this->readMovie($this->id);
		}
		else {
			# code...
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}

	}
	
	function deleteMovie(){
		//////////////////Complete/////////////////////////////
		$sql="delete from movie where id=$this->id";
		if ($this->db->query($sql)) {
			# code...
			echo"Movie Deleted Successfully";
		}
		else {
			# code...
			echo "ERROR: Could not able to execute $sql. " . $conn->error;
		}
	}
}