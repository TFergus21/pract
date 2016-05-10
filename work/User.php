<?php

include_once('connection.php');

class User{

	private $db;
	
	public function _ _construct(){
		$this->db = new Connection();
		$this->db = $this->db->dbConnect();
		
	}
	
	public function Login($username, $pass){
		if(!empty($username) && !empty($pass)){
		$st = $this->db->prepare("select * from users where username=? and pass=?");
		$st->bindParam(1, $username);
		$st->bindParam(2, $pass);
		$st->execute();
		
		if($st->rowCount() == 1){
			echo "User verified access granted.";
		
		}else{ 
			echo "inncorrect username or Pass";
		
		}
		
		}else{
		
			echo "please enter username and password";
		}
	}


}



?>