<?php
require_once "BDnajuvisApp.php";

class UserClass{
	//Class properties
	private $id;
	private $nick;
	private $password;
	private $state;
	private $type;

	//******************	Data base Values    ******************/
	private static $tableName = "user";
	private static $colNameId = "id";
	private static $colNameNick = "nick";
	private static $colNamePassword = "password";
	private static $colNameState = "state";
	private static $colNameType = "type";

	//CONSTRUCTOR
	function __construct(){}

	//****************	GETTERS & SETTERS  ****************/
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNick(){
		return $this->nick;
	}

	public function setNick($nick){
		$this->nick = $nick;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}
	
	public function getState(){
		return $this->state;
	}
	
	public function setState($state){
		$this->state = $state;
	}
	
	public function getType(){
		return $this->type;
	}
	
	public function setType($type){
		$this->type = $type;
	}
	
	/*******methods*******/
	private static function fromResultSet( $res ) {
	//We get all the values form the query
		$id = $res[ UserClass::$colNameId ];
        $nick = $res[ UserClass::$colNameNick ];
        $password = $res[ UserClass::$colNamePassword ];
		$state = $res[ UserClass::$colNameState ];
		$type = $res[ UserClass::$colNameType ];

       	//Object construction
       	$entity = new UserClass();
		$entity->setId($id);
		$entity->setNick($nick);
		$entity->setPassword($password);
		$entity->setState($state);
		$entity->setType($type);
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
		
		return UserClass::fromResultSetList( $res );
    }
	/**
	* findByNickAndPass()
	 * It runs a query and returns an object array
	 * @param name
	 * @return object with the query results
    */
    public static function findByNickAndPass( $nick, $password ) {
		$cons = "select * from `".UserClass::$tableName."` where ".UserClass::$colNameNick." = \"".$nick."\" and ".UserClass::$colNamePassword." = \"".$password."\" and ".UserClass::$colNameState."= \"1\"";
		
		return UserClass::findByQuery( $cons );
    }
	
	public function getAll() {
		$data = array();
		$data["id"] = $this->id;
		$data["nick"] = $this->nick;
		$data["password"] = $this->password;
		$data["state"] = $this->state;
		$data["type"] = $this->type;
		//print_r($data);
		return $data;
    }
	
	public static function findAll(){
		$cons = "select * from `".UserClass::$tableName."`";
		
		return UserClass::findByQuery( $cons );
	}
	
	public function deleteOne($id){
		$cons = "delete from `".UserClass::$tableName."` where ".UserClass::$colNameId." = ".$id;
		
		return UserClass::findByQuery( $cons );
	}
}

?>