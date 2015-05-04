<?php

class ReserveClass{
	//Class properties
	private $id;
	private $date;
	private $entryDate;
	private $outDate;
	private $idClient;

	//******************	Data base Values    ******************/
	private static $tableName = "reserve";
	private static $colNameId = "id";
	private static $colNameDate = "date";
	private static $colNameEntryDate = "entryDate";
	private static $colNameOutDate = "outDate";
	private static $colNameIdClient = "idClient";

	//CONSTRUCTOR
	function __construct(){}

	//****************	GETTERS & SETTERS  ****************/
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
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

	public function getIdClient(){
		return $this->idClient;
	}

	public function setIdClient($idClient){
		$this->idClient = $idClient;
	}

}

?>