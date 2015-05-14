<?php

require_once "BDnajuvisApp.php";

class ProductClass{
	//Class properties
	public $id;
	public $type;
	public $name;
	public $price;
	public $description;
	public $image;
	public $size;

	//******************	Data base Values    ******************/
	private static $tableName = "product";
	private static $colNameId = "id";
	private static $colNameType = "type";
	private static $colNameName = "name";
	private static $colNamePrice = "price";
	private static $colNameDescription = "description";
	private static $colNameImage = "image";
	private static $colNameSize = "size";

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

	public function getImage(){
		return $this->image;
	}

	public function setImage($image){
		$this->image = $image;
	}

	public function getSize(){
		return $this->size;
	}

	public function setSize($size){
		$this->size = $size;
	}

	public function getAll(){
		$data = array();
		$data["id"] = $this->getId();
		$data["type"] = $this->getType();
		$data["name"] = $this->getName();
		$data["price"] = $this->getPrice();
		$data["description"] = $this->getDescription();
		$data["image"] = $this->getImage();
		$data["size"] = $this->getSize();


		return $data;
	}

	public function setAll($id,$type,$name,$price,$description,$image,$size){
		$this->setId($id);
		$this->setType($type);
		$this->setName($name);
		$this->setPrice($price);
		$this->setDescription($description);
		$this->setImage($image);
		$this->setSize($size);
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
			$entity = ProductClass::fromResultSet( $row );
			
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
		$id = $res [ ProductClass::$colNameId ];
		$type = $res[ ProductClass::$colNameType ];
		$name = $res[ ProductClass::$colNameName ];
		$price = $res[ ProductClass::$colNamePrice ];
		$description = $res[ ProductClass::$colNameDescription ];
		$image = $res[ ProductClass::$colNameImage ];
		$size = $res[ ProductClass::$colNameSize ];

	    //Object construction
	    $entity = new ProductClass();
		$entity->setId($id);
		$entity->setType($type);
		$entity->setName($name);
		$entity->setPrice($price);
		$entity->setDescription($description);
		$entity->setImage($image);
		$entity->setSize($size);

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

	return ProductClass::fromResultSetList( $res );
    }

    /**
	 * findAll()
	 * It runs a query and returns an object array
	 * @param none
	 * @return object with the query results
    */
    public static function findAll( ) {
    	$cons = "select * from `".ProductClass::$tableName."` limit 8";
		return ProductClass::findByQuery( $cons );
    }

    /**
	 * findByType()
	 * It find the products by type
	 * @param none
	 * @return object with the query results
    */
    public static function findByType($type) {
    	$cons = "select * from `".ProductClass::$tableName."` where ".ProductClass::$colNameType." = '".$type."'";
		return ProductClass::findByQuery( $cons );
    }

    /**
	 * findLikeName()
	 * It find the products by type
	 * @param none
	 * @return object with the query results
    */
    public static function findLikeName($name) {
    	$cons = "select * from `".ProductClass::$tableName."` where ".ProductClass::$colNameName." like  '%".$name."%'";
		return ProductClass::findByQuery( $cons );
    }

    /**
	 * create()
	 * insert a new row into the database
    */
    public function create() {
		//Connection with the database
		$conn = new BDnajuvisApp();
		if (mysqli_connect_errno()) {
	   		printf("Connection with the database has failed, error: %s\n", mysqli_connect_error());
	    		exit();
		}

		//Preparing the sentence
		$stmt = $conn->stmt_init();
		if ($stmt->prepare("insert into ".ProductClass::$tableName."(`".ProductClass::$colNameType."`,`".ProductClass::$colNameName."`,`".ProductClass::$colNameDescription."`,`".ProductClass::$colNameImage."`,`".ProductClass::$colNameSize."`) values (?, ?, ?, ?, ?)" )) {
			$stmt->bind_param("iidsii", $this->getType(), $this->getName(), $this->getDescription(), $this->getImage(), $this->getSize());
			//executar consulta
			//print_r("llega aqui");
			$stmt->execute();
		}
		
		if ( $conn != null ) $conn->close();
	}





}

?>