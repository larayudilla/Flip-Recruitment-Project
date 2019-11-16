<?php

include_once("models/Model.php");

class Controller {
	public $model;
	
	public function __construct()  {  
		$this->model = new Model();
        } 
	
	public function index() {
		require_once('views/index.php');
	}

	function save() { 
		$parameter = [
			"account_number" =>$_POST['account_number'],
			"bank_code" => $_POST['bank_code'],
			"amount" =>$_POST['amount'],
			"remark" =>$_POST['remark'],
		];

		$this->model->saveData($parameter);
		$this->index(); 
	}

	function show_data() {
		if(!isset($_GET['i'])) {
			$hsl = $this->model->lihatData();
			require_once('views/disbursList.php');
		}
		else {
			$hsl = $this->model->lihatDataDetail($_GET['i']);
    			require_once('views/disbursDetail.php');
		}
	}
}

?>
