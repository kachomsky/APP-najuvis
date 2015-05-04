<?php

class ProductClass{
	//Class properties
	private $id;
	private $type;
	private $name;
	private $price;
	private $description;

	//******************	Data base Values    ******************/
	private static $tableName = "product";
	private static $colNameId = "id";
	private static $colNameType = "type";
	private static $colNameName = "name";
	private static $colNamePrice = "price";
	private static $colNameDescription = "description";

	//CONSTRUCTOR
	function __construct(){}

	//****************	GETTERS & SETTERS  ****************/
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getType(){
		return $this->type;
	}

	public function setType($type){
		$this->type = $type;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getPrice(){
		return $this->price;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

}

?>