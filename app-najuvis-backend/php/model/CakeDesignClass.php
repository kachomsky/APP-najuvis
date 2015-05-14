<?php
require_once "BDnajuvisApp.php";

class CakeDesignClass{
	//Class propierties
	private $id;
	private $size;
	private $description;
	private $idOrder;
	
	//Data base Values
	private static $tableName = "cake_design";
	private static $colNameId = "id";
	private static $colNameSize = "size";
	private static $colNameDescription = "description";
	private static $colNameIdOrder = "idOrder";
	
	//Constructor
	function __construct(){}
	
	//Getters & Setters
	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getSize(){
		return $this->size;
	}
	
	public function setSize($size){
		$this->size= $size;
	}
	
	public function getDescription(){
		return $this->description;
	}
	
	public function setDescription($description){
		$this->description = $description;
	}
	
	public function getIdOrder(){
		return $this->idOrder; 
	}
	
	public function setIdOrder($idOrder){
		$this->idOrder = $idOrder;
	}
	
	//Methods
	private static function fromResultSet($res){
		$id = $res[ CakeDesignClass::$colNameId ];
		$size = $res[ CakeDesignClass::$colNameSize ];
		$description = $res[ CakeDesignClass::$colNameDescription ];
		$idOrder = $res[ CakeDesignClass::$colNameIdOrder ];
		
		$entity = new CakeDesignClass();
		$entity->setAll($id,$size,$description,$idOrder);
		
		return $entity;
	}
	
	 /**
	 * fromResultSetList()
	 * this function runs a query and returns an array with all the result transformed into an object
	 * @param res query to execute
	 * @return objects collection
    */
    private static function fromResultSetList( $res ) {
		$entityList = array();
		$i=0;
		//print_r($res);
		while ( ($row = $res->fetch_array(MYSQLI_BOTH)) != NULL ) {
			//We get all the values an add into the array
			$entity = UserClass::fromResultSet( $row );
			
			$entityList[$i]= $entity;
			$i++;
		}
		return $entityList;
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
		//print_r($res);
		if ( $conn != null ) $conn->close();
		
		return CakeDesignClass::fromResultSetList( $res );
    }
	
	public function setAll($id,$size,$description,$idOrder){
		$this->id = $id;
		$this->size= $size;
		$this->description = $description;
		$this->idOrder = $idOrder;
	}
}
?>