<?php 
	include_once("controllers/Controller.php");
	
	$controller = new Controller();

	if(!isset($_GET['flip']))
	{
		$controller->index();
	}
	else
	{
		switch($_GET['flip'])
		{
			case 'tampil-data' :
				$controller->show_data();
				break;
				
			case 'simpan' :
				$controller->save();
				break;
				
			case 'home' : 
				$controller->index();
				break;

			default : 
				$controller->index();
				break;
		}
	}

?>
