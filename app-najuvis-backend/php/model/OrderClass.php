<?php

class OrderClass{
	//Class properties
	public $id;
	public $idClient;
	public $orderNumber;
	public $dateOrder;
	public $deliveryDate;
	public $totalPrice;

	//******************	Data base Values    ******************/
	private static $tableName = "order_table";
	private static $colNameId = "id";
	private static $colNameIdClient = "idClient";
	private static $colNameOrderNumber = "orderNumber";
	private static $colNameDateOrder = "dateOrder";
	private static $colNameDeliveryDate = "deliveryDate";
	private static $colNameTotalPrice = "totalPrice";

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

	public function getOrderNumber(){
		return $this->orderNumber;
	}

	public function setOrderNumber($orderNumber){
		$this->orderNumber = $orderNumber;
	}

	public function getDateOrder(){
		return $this->dateOrder;
	}

	public function setDateOrder($dateOrder){
		$this->dateOrder = $dateOrder;
	}

	public function getDeliveryDate(){
		return $this->deliveryDate;
	}

	public function setDeliveryDate($deliveryDate){
		$this->deliveryDate = $deliveryDate;
	}

	public function getTotalPrice(){
		return $this->totalPrice;
	}

	public function setTotalPrice($totalPrice){
		$this->totalPrice = $totalPrice;
	}

	public function getAll(){
		$data = array();
		$data["id"] = $this->getId();
		$data["idClient"] = $this->getIdClient();
		$data["orderNumber"] = $this->getOrderNumber();
		$data["dateOrder"] = $this->getDateOrder();
		$data["deliveryDate"] = $this->getDeliveryDate();
		$data["totalPrice"] = $this->getTotalPrice();

		return $data;
	}

	public function setAll($id,$idClient,$orderNumber,$dateOrder, $deliveryDate, $totalPrice){
		$this->setId($id);
		$this->setIdClient($idClient);
		$this->setOrderNumber($orderNumber);
		$this->setDateOrder($dateOrder);
		$this->setDeliveryDate($deliveryDate);
		$this->setTotalPrice($totalPrice);
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
			$entity = OrderClass::fromResultSet( $row );
			
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
		$id = $res [ OrderClass::$colNameId ];
		$idClient = $res[ OrderClass::$colNameIdClient ];
		$orderNumber = $res[ OrderClass::$colNameOrderNumber ];
		$dateOrder = $res[ OrderClass::$colNameDateOrder ];
		$deliveryDate = $res[ OrderClass::$colNameDeliveryDate ];
		$totalPrice = $res[ OrderClass::$colNameTotalPrice ];



	    //Object construction
	    $entity = new OrderClass();
		$entity->setId($id);
		$entity->setIdClient($idClient);
		$entity->setOrderNumber($orderNumber);
		$entity->setDateOrder($dateOrder);
		$entity->setDeliveryDate($deliveryDate);
		$entity->setTotalPrice($totalPrice);

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

	return OrderClass::fromResultSetList( $res );
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
		if ($stmt->prepare("insert into ".OrderClass::$tableName." (`idClient`,`orderNumber`,`dateOrder`,`deliveryDate`,`totalPrice`) values (?, ?, ?, ?, ?)" )) {
			$stmt->bind_param("iissd", $this->getIdClient(), $this->getOrderNumber(), $this->getDateOrder(), $this->getDeliveryDate(), $this->getTotalPrice());
			//executar consulta
			$stmt->execute();
			
			$this->setId($conn->insert_id);
	    }
	    
	    if ( $conn != null ) $conn->close();
	    
	    return $this->getId();
	}


}

?>