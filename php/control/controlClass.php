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
					echo toDoClass::listAllProducts($this->params['action']);
				break;
				
				default:
					echo "Action not correct, value: ".$this->params['action'];
				break;
			}
		}
	}



}


?>