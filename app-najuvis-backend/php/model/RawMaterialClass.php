<?php
require_once "BDnajuvisApp.php";

class RawMaterialClass{
	//Class properties
	private $id;
	private $productName;
	private $quantity;
	
	//data base Values
	private static $tableName = "raw_material";
	private static $colNameId = "id";
	private static $colNameProductName = "productName";
	private static $colNameQuantity = "quantity";
	
	//constructor
	function __construct(){}
	
	//getters and setters
	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function getProductName(){
		return $this->productName;
	}
	
	public function setProductName($productName){
		$this->productName = productName;
	}
	
	public function getQuantity(){
		return $this->quantity;
	}
	
	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}
	
	/*******methods*******/
	private static function fromResultSet( $res ) {
	//We get all the values form the query
		$id = $res[ RawMaterialClass::$colNameId ];
        $productName = $res[ RawMaterialClass::$colNameProductName ];
        $quantity = $res[ RawMaterialClass::$colNameQuantity ];

       	//Object construction
       	$entity = new RawMaterialClass();
		$entity->setId($id);
		$entity->setProductName($productName);
		$entity->setQuantity($quantity);
		//print_r($entity);
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
			$entity = RawMaterialClass::fromResultSet( $row );
			
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
		
		return RawMaterialClass::fromResultSetList( $res );
    }
}
?>