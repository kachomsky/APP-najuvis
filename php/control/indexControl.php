<?php
	//require_once "controller/classController.php";
	$controller = new Controller();

		if(isset($_GET["action"])){
			switch($_GET["action"]){
				case 1:
					echo $controller -> listVideos();
					break;
				case 2:
					echo $controller -> addPeliculesForm();
					break;
				case 3:
					echo $controller ->buscarPeliculas($_POST["tipusPeli"]);
					break;
			}
		}else{
			echo $controller->main();
		}

?>