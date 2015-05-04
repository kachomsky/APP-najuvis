<?php

class ReserveClass{
	/*id, date, idClient*/
	//Class properties
	private $id;
	private $date;
	private $idClient;

	//******************	Data base Values    ******************/
	private static $tableName = "reserve";
	private static $colNameId = "id";
	private static $colNameDate = "date";
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

	public function getIdClient(){
		return $this->idClient;
	}

	public function setIdClient($idClient){
		$this->idClient = $idClient;
	}

}

?>