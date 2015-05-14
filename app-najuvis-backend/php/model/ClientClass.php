<?php

class clientClass{

	//Class properties
	private $id;
	private $email;
	private $name;
	private $surname1;
	private $surname2;
	private $dni;
	private $address;
	private $entryDate;

	//******************	Data base Values    ******************/
	private static $tableName = "client";
	private static $colNameId = "id";
	private static $colNameEmail = "email";
	private static $colNameName = "name";
	private static $colNameSurname1 = "surname1";
	private static $colNameSurname2 = "surname2";
	private static $colNameDni = "dni";
	private static $colNameAddress = "address";
	private static $colNameEntryDate = "entryDate";

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
	
	public function getAddress(){
		return $this->address;
	}
	
	public function setAddress($address){
		$this->address = $address;
	}

	public function getEntryDate(){
		return $this->entryDate;
	}
	
	public function setEntryDate($entryDate){
		$this->entryDate=$entryDate;
	}
	
	public function getAll(){
		$data = array();
		$data["id"] = $this->id;
		$data["email"] = $this->email;
		$data["name"] = $this->name;
		$data["surname1"] = $this->surname1;
		$data["surname2"] = $this->surname2;
		$data["dni"] = $this->dni;
		$data["address"]  = $this->address;
		$data["entryDate"] = $this->entryDate;

		return $data;
	}

	public function setAll($id,$email,$name,$surname1,$surname2,$dni,$address,$entryDate){
		$this->setId($id);
		$this->setEmail($email);
		$this->setName($name);
		$this->setSurname1($surname1);
		$this->setSurname2($surname2);
		$this->setDni($dni);
		$this->setAddress($address);
		$this->setEntryDate($entryDate);
	}

	//*************	Database management section *************//
	/**
	 * fromResultSetList()
	 * this function runs a query and returns an array with all the result transformed into an object
	 * @param res query to execute
	 * @return objects collection
    */
	private static function fromResultSetList($res) {
		$entityList = array();
		$i=0;
		while ( ($row = $res->fetch_array(MYSQLI_BOTH)) != NULL ) {
			//We get all the values an add into the array
			$entity = ClientClass::fromResultSet( $row );
			
			$entityList[$i]= $entity;
			$i++;
		}
			return $entityList;
	}

	/**
	* fromResultSet()
	* the query result is transformed into an object
	* @param res ResultSet del qual obtenir dades
	* @return object
    */
    private static function fromResultSet( $res ) {
		//We get all the values form the query
		$id = $res [ ClientClass::$colNameId ];
		$email = $res[ ClientClass::$colNameEmail ];
		$name = $res[ ClientClass::$colNameName ];
		$surname1 = $res[ ClientClass::$colNameSurname1 ];
		$surname2 = $res[ ClientClass::$colNameSurname2 ];
		$dni = $res[ ClientClass::$colNameDni ];
		$address = $res[ ClientClass::$colNameAddress ];
		$entryDate = $res[ ClientClass::$colNameEntryDate ];

	    //Object construction
	    $entity = new ClientClass();
		$entity->setId($id);
		$entity->setEmail($email);
		$entity->setName($name);
		$entity->setSurname1($surname1);
		$entity->setSurname2($surname2);
		$entity->setDni($dni);
		$entity->setAddress($address);
		$entity->setEntryDate($entryDate);

		return $entity;
    }

    /**
	 * findByQuery()
	 * It runs a particular query and returns the result
	 * @param cons query to run
	 * @return objects collection
    */
    public static function findByQuery( $cons ) {
		//Connection with the database
		$conn = new BDnajuvisApp();
		if (mysqli_connect_errno()) {
				printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
				exit();
		}
		
		//Run the query
		$res = $conn->query($cons);

		return ClientClass::fromResultSetList( $res );
    }
	
	public static function findAll(){
		$cons = "select * from `".ClientClass::$tableName."`";
		
		return ClientClass::findByQuery( $cons );
	}
}

?>