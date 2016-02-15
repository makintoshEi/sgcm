<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Cfactura extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct(); // get the methods of CI_controller
			$this->load->model(array('mfactura'));
		}


		public function start()
		{
			$this->load->view('menu');
			$this->load->view('vFactura');
		}

		public function autocompletar_cliente()
		{
			$row=array();

			$data = $this->mfactura->statementSQL("Select cli_ced FROM cliente");
			//$data = $this->cfactura->selectSQLMultiple("SELECT cli_ced FROM cliente where cli_ced ilike '%'||'".$this->input->post('cli_ced')."'||'%'",null);
			foreach ($data as $valor)
			{
				
				$row["cedula"][] = $valor;
				//$row_set[] = $row;//build an array
			}
			header('Content-type: application/json; charset=utf-8');
			echo json_encode($row);
		}

		public function autocompletar_producto()
		{
			$row=array();

			$data = $this->mfactura->statementSQL("Select pro_des FROM producto");
			//$data = $this->cfactura->selectSQLMultiple("SELECT cli_ced FROM cliente where cli_ced ilike '%'||'".$this->input->post('cli_ced')."'||'%'",null);
			foreach ($data as $valor)
			{
				
				$row["producto"][] = $valor;
				//$row_set[] = $row;//build an array
			}
			header('Content-type: application/json; charset=utf-8');
			echo json_encode($row);
		}

		public function getCliente()
		{
			if ($this->input->is_ajax_request())
			{
				$sql = "SELECT * FROM cliente where cli_ced = ?";
				$data["cliente"] = $this->mfactura->customquery($sql,array($this->input->post('cedula')));
				header('Content-type: application/json; charset=utf-8');
				echo json_encode($data);
			}
		}

		public function getProducto()
		{
			if ($this->input->is_ajax_request())
			{
				$sql = "SELECT * FROM producto where pro_des = ?";
				$data["producto"] = $this->mfactura->customquery($sql,array($this->input->post('id')));
				header('Content-type: application/json; charset=utf-8');
				echo json_encode($data);
			}
		}
	}

 ?>