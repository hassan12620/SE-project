<?php
require_once(__ROOT__ . "view/View.php");

class ViewMovies extends View{

	public function output(){
		$str = "";
		//////////////////Complete/////////////////////////////
		$movies=$this->model->getMovie();
		foreach ($movie as $movies){
		
			$str.="<h1>Movie Name:".$this->model->getName()."</h1>";
			$str.="<br>";
			$str.="<h2>Year:".$this->model->getYear()."</h2>";
		}
		return $str;
	}
	
	public function edit($id){
		$str = "";
		//////////////////Complete/////////////////////////////
		$str.='<form action="Movies.php?action=editaction" method="post">
		<div>Name:</div><div> <input type="text" name="name" value="'.$this->model->getName().'"/></div><br>
		<div>Year:</div><div> <input type="text" name="year" value="'.$this->model->getYear().'"/></div><br>
		<div><input type="submit" /></div>';
		
		return $str;
	}
}
?>