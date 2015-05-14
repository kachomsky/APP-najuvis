<?php

require_once "toDoClass.php";

class controlClass{
	private $params; 

	function __construct( $prmts){
		$this->params = array();
		foreach ($prmts as $n => $v){
			$this->params[$n] = $v;
		}
	}
	

	public function actionToDo(){
		if (isset($this->params['action'])){
			switch($this->params['action']){
			
				case '10000':
					echo toDoClass::userConnection($this->params['action'], $this->params['JSONData']);
				break;
				
				case '10001':
					echo toDoClass::getAllUsers();
				break;
				
				case '10002':
					echo toDoClass::deleteUser($this->params['JSONData']);
				break;
				
				case '10003':
					echo toDoClass::getAllClients();
				break;
				
				default:
					echo "Action not correct, value: ".$this->params['action'];
				break;
			}
		}
	}



}


?>