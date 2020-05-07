<?php
class User{
    //instance variables
	private $userId = null;
	private $userName = null;
	private $userType = null;
	private $password = null;
	private $email = null;
	private $companyName = null;

	//constructor
	private function _construct(int $userId, string $userName, int $userType, string $password, string $email, string $companyName){
		$this->email 	   = $email;
		$this->userId 	   = $userId;
		$this->userName    = $userName;
		$this->userType    = $userType;
		$this->password    = $password;
		$this->companyName = $companyName;
	}

	//getters
	//methods that get their respective variable 
	public function getUserId(){
		return $this->userId;
	}
	public function getUserName(){
		return $this->userName;
	}
	public function getUserType(){
		return $this->userType;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getCompanyName(){
		return $this->companyName;
	}
	
	//setters
	//methods that set their respective variable 
	public function setUserId($userId){
	    $this->userId = $userId;
	}
	
	public function setUserName($userName){
	    $this->userName = $userName;
	}
	
	public function setUserType($userType){
	    $this->userType = $userType;
	}
	
	public function setEmail($email){
	    $this->email = $email;
	}
	
	public function setPassword($password){
	    $this->password = $password;
	}
	
	public function setCompanyName($companyName){
	    $this->companyName = $companyName;
	}
	

	//function that verifies login 
	//takes inputs of a two strings
	//if the input strings are correct, then this menthod should return true
	//elsewise it returns false 
	public function verifyLogin(string $email, string $password){
		if ($this->email == $email && $this->password == $password){
			return true;
		} else {
			return false;
		}
	}
}



?>
