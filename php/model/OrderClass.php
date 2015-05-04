<?php

class OrderClass{
	//Class properties
	private $id;
	private $idClient;
	private $idProduct;
	private $orderNumber;
	private $date;

	//******************	Data base Values    ******************/
	private static $tableName = "order";
	private static $colNameId = "id";
	private static $colNameIdClient = "idClient";
	private static $colNameIdProduct = "idProduct";
	private static $colNameOrderNumber = "orderNumber";
	private static $colNameDate = "date";

	//CONSTRUCTOR
	function __construct(){}

	//****************	GETTERS & SETTERS  ****************/
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getIdClient(){
		return $this->idClient;
	}

	public function setIdClient($idClient){
		$this->idClient = $idClient;
	}

	public function getIdProduct(){
		return $this->idProduct;
	}

	public function setIdProduct($idProduct){
		$this->idProduct = $idProduct;
	}

	public function getOrderNumber(){
		return $this->orderNumber;
	}

	public function setOrderNumber($orderNumber){
		$this->orderNumber = $orderNumber;
	}

	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
	}

}

?>