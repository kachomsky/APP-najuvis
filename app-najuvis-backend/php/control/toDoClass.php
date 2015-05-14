<?php

require_once "../model/UserClass.php";
require_once "../model/ClientClass.php";

class toDoClass{
	
	static public function userConnection($action, $JSONData)
	{
		//print_r($JSONData);
		$userObj = json_decode(stripslashes($JSONData));
		//print_r($userObj);
		$outPutData = array();
		$errors = array();
		$outPutData[0]=true;
		//print_r($outPutData);
		$userList = userClass::findByNickAndPass($userObj->nick, $userObj->password);
		//print_r($userList);
		if (count($userList)==0)
		{
			$outPutData[0]=false;
			$errors[]="Usuario no encontrado";
			$outPutData[1]=$errors;
		}
		else
		{
			foreach ( $userList as $user)
			{
				$usersArray[]=$user->getAll();
			}
			
			$outPutData[1]=$usersArray;
		}
		
		return json_encode($outPutData);
	}
	
	static public function getAllUsers(){
	
		$outPutData = array();
		$errors = array();
		$outPutData[0]=true;
		//print_r($outPutData);
		$userList = userClass::findAll();
		//print_r($userList);
		if (count($userList)==0)
		{
			$outPutData[0]=false;
			$errors[]="Usuario no encontrado";
			$outPutData[1]=$errors;
		}
		else
		{
			foreach ( $userList as $user)
			{
				$usersArray[]=$user->getAll();
			}
			
			$outPutData[1]=$usersArray;
		}
		
		return json_encode($outPutData);		
	}
	
	static public function deleteUser($JSONData){
		$delete = userClass::deleteOne($JSONData);
	}
	
	static public function getAllClients(){
	
		$outPutData = array();
		$errors = array();
		$outPutData[0]=true;
		//print_r($outPutData);
		$clientList = clientClass::findAll();
		//print_r($clientList);
		if (count($clientList)==0)
		{
			$outPutData[0]=false;
			$errors[]="Usuario no encontrado";
			$outPutData[1]=$errors;
		}
		else
		{
			foreach ( $clientList as $client)
			{
				$clientsArray[]=$client->getAll();
			}
			
			$outPutData[1]=$clientsArray;
		}
		
		return json_encode($outPutData);		
	}
}