<?php 
/**
 * 
 */
class Database
{


	public $host="localhost";
	public $root="root";
	public $password="";
	public $dbname="phpcsv";



	public $link;
	public $error;

	public function dbconnection(){
		$this->link=new mysqli($this->host,$this->root,$this->password,$this->dbname);
		if (!$this->link) {
			$this->error="connection failed".$this->link->connect_error;
		}
	}

	
	function __construct()
	{
	$this->dbconnection();
	}


	public function insertdata($data){
		$insertdata=$this->link->query($data) or die($this->link->error.__line__);
		if ($insertdata) {
			echo "data is inerted";
		}
		else{
			echo "data is Not inerted";
		}
	}

	public function selectdata($data){
		$selectdata=$this->link->query($data) or die($this->link->error.__line__);
		if ($selectdata->num_rows > 0) {
			return $selectdata;
		}
		else{
			return false;
		}
	}
}


 ?>