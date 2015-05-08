<?php

class ReserveClass{
	//Class properties
	private $id;
	private $date;
	private $entryTime;
	private $outTime;
	private $idClient;

	//******************	Data base Values    ******************/
	private static $tableName = "reserve";
	private static $colNameId = "id";
	private static $colNameDate = "date";
	private static $colNameEntryTime = "entryTime";
	private static $colNameOutTime = "outTime";
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

	public function getEntryTime(){
		return $this->entrytime;
	}

	public function setEntryTime($entryTime){
		$this->entryTime = $entryTime;
	}

	public function getOutTime(){
		return $this->outTime;
	}

	public function setOutTime($outTime){
		$this->outTime = $outTime;
	}

	public function getIdClient(){
		return $this->idClient;
	}

	public function setIdClient($idClient){
		$this->idClient = $idClient;
	}

}

?>