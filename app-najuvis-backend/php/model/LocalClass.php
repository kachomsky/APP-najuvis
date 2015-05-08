<?php

class LocalClass{
	//Class properties
	private $id;
	private $address;
	private $price_hour;
	private $state;

	//******************	Data base Values    ******************/
	private static $tableName = "locals";
	private static $colNameId = "id";
	private static $colNameDate = "address";
	private static $colNameIdClient = "state";
	private static $colPriceHour = "price_hsour";

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

	public function getPriceHour(){
		return $this->price_hour;
	}

	public function setPriceHour($price_hour){
		$this->price_hour = $price_hour;
	}
}

?>