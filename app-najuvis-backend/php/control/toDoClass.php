<?php

require_once "../model/UserClass.php";

class toDoClass{
	
	static public function userConnection($action, $JSONData)
	{
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
			$errors[]="No user has found with these data";
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
}