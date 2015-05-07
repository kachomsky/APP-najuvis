<?php

require_once "../model/ClientClass.php";
require_once "../model/LocalClass.php";
require_once "../model/OrderClass.php";
require_once "../model/ProductClass.php";
require_once "../model/ReserveClass.php";
require_once "../model/UserClass.php";

class toDoClass{

	static public function listAllProducts(){
		$outPutData = array();
		$errors = array();
		$outPutData[0]=true;

		$listproductsSearch = ProductClass::findAll();

		if(count($listproductsSearch)==0){
			$outPutData[0]=false;
			$errors[]="No products have been found into the database";
			$outPutData[1]=$errors;
		}
		else{
			$outPutData[1]=$listproductsSearch;
		}
		return json_encode($outPutData);
	}
}