<?php

class UserClass{
	//Class properties
	private $id;
	private $nick;
	private $password;

	//******************	Data base Values    ******************/
	private static $tableName = "user";
	private static $colNameId = "id";
	private static $colNameDate = "nick";
	private static $colNameIdClient = "password";

	//CONSTRUCTOR
	function __construct(){}

	//****************	GETTERS & SETTERS  ****************/
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNick(){
		return $this->nick;
	}

	public function setNick($nick){
		$this->nick = $nick;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

}

?>