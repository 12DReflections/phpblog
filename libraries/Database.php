<?php
class Database{
	public $host = DB_HOST;
	public $username = DB_USER;
	public $password = DB_PASS;
	public $db_name = DB_NAME;
	
	public $link; //represents mysqli object
	public $error;
		
	/*
	*Class Constructor
	*/	
		
	public function __construct(){
		//Call connect
		$this->connect();
	} 
	/*
	*Connector
	*/
	private function connect(){
		$this->link = new mysqli($this->host, $this->username, $this->password, $this->db_name);
		if(!$this->link){
			$this->error = "Connection Failed:".$this->link->connect_error; //Provides SQL error
			return false;
		}
	}
	
	/*
	*Select
	*/
	public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__Line__); //refers to mysqli object "new mysqli(<variables>)"
		if($result->num_rows > 0){
			return $result;
		} else{
			return $false;
		}
	}
	
	/*
	*Insert
	*/
	public function insert($query){
		$insert_row = $this->link->query($query) or die($this->link->error.__Line__);
		
		//Validate Insert
		if($insert_row){
			header('Location: index.php?msg='.urlencode('Record Added')); //redirect
			exit();
		} else{
			die('Error : ('. $this->link->errno .') '. $this->link->error);
		}
	}
	
	/*
	*Update
	*/
	public function update($query){
		$update_row = $this->link->query($query) or die($this->link->error.__Line__);
		
		//Validate Insert
		if($update_row){
			header('Location: index.php?msg='.urlencode('Record Updated')); //redirect
			exit();
		} else{
			die('Error : ('. $this->link->errno .') '. $this->link->error);
		}
	}
	
	/*
	*Delete
	*/
	public function delete($query){
		$update_row = $this->link->query($query) or die($this->link->error.__Line__);
		
		//Validate Insert
		if($delete_row){
			header('Location: index.php?msg='.urlencode('Record deleted')); //redirect
			exit();
		} else{
			die('Error : ('. $this->link->errno .') '. $this->link->error);
		}
	}
}