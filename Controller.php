<?php
include_once("models/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function index()
	{
		require_once('views/index.php');
	}

	function save()
	{ 
		
		$param = [
			"account_number" =>$_POST['account_number'],
			"bank_code" => $_POST['bank_code'],
			"amount" =>$_POST['amount'],
			"remark" =>$_POST['remark'],
		];

		$this->model->saveData($param);
		$this->index(); //controller dikembalikan ke method index setelah selesai mengakses method ini.
	}

	function show_data()
	{
		if(!isset($_GET['i']))
		{
			//jika tidak ada parameter id yang dikirim, maka akan menampilkan semua data yang ada
			$rs = $this->model->lihatData();
			require_once('views/disbursList.php');
		}
		else
		{
			//ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih
			$rs = $this->model->lihatDataDetail($_GET['i']);
			require_once('views/disbursDetail.php');
		}
	}

}

?>