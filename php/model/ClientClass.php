<?php

class clientClass{

	//Class properties
	private $id;
	private $email;
	private $name;
	private $surname1;
	private $surname2;
	private $dni;

	//******************	Data base Values    ******************/
	private static $tableName = "client";
	private static $colNameId = "id";
	private static $colNameEmail = "email";
	private static $colNameName = "name";
	private static $colNameSurname1 = "surname1";
	private static $colNameSurname2 = "surname2";
	private static $colNameDni = "dni";

	//CONSTRUCTOR
	function __construct(){}

	//****************	GETTERS & SETTERS  ****************/
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getSurname1(){
		return $this->surname1;
	}

	public function setSurname1($surname1){
		$this->surname1 = $surname1;
	}

	public function getSurname2(){
		return $this->surname2;
	}

	public function setSurname2($surname2){
		$this->surname2 = $surname2;
	}

	public function getDni(){
		return $this->dni;
	}

	public function setDni($dni){
		$this->dni = $dni;
	}
}

?>