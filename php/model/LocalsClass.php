<?php

class LocalsClass{
	//Class properties
	private $id;
	private $address;
	private $state;
	private $entryDate;
	private $outDate;

	//******************	Data base Values    ******************/
	private static $tableName = "locals";
	private static $colNameId = "id";
	private static $colNameDate = "address";
	private static $colNameIdClient = "state";
	private static $colNameEntryDate = "entryDate";
	private static $colNameOutDate = "outDate";

	//CONSTRUCTOR
	function __construct(){}

	//****************	GETTERS & SETTERS  ****************/
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getAddress(){
		return $this->address;
	}

	public function setAddress($address){
		$this->address = $address;
	}

	public function getState(){
		return $this->state;
	}

	public function setState($state){
		$this->state = $state;
	}

	public function getEntryDate(){
		return $this->entryDate;
	}

	public function setEntryDate($entryDate){
		$this->entryDate = $entryDate;
	}

	public function getOutDate(){
		return $this->outDate;
	}

	public function setOutDate($outDate){
		$this->outDate = $outDate;
	}

}

?>