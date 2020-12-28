<?php
class User
{
    private $firstName;
    private $lastName;
    private $login;
	private $password;
	private $role;
	private $status;


	function __construct($firstName, $lastName, $login, $password, $role, $status) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->login = $login;
		$this->password = $password;
		$this->role = $role;
		$this->status = $status;

	}
	
    public function getFirstName(){
		return $this->firstName;
	}

	public function setFirstName($firstName){
		$this->firstName = $firstName;
	}

	public function getLastName(){
		return $this->lastName;
	}

	public function setLastName($lastName){
		$this->lastName = $lastName;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setLogin($login){
		$this->login = $login;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function setRole($role){
		$this->role = $role;
	}

	public function getRole(){
		return $this->role;
	}

	public function setStatus($status){
		$this->status = $status;
	}

	public function getStatus(){
		return $this->status;
	}
}



?>