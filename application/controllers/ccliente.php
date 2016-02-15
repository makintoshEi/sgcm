<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Ccliente extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model(array('mcliente')); //get the model to work with
		}

		public function start()
		{
			$this->load->view('menu');
			$this->load->view('vCliente');
		}
		
		public function save()
		{
			if ($this->input->is_ajax_request())
			{
				$data = array(
				'cli_ced' 	=> $this->input->post('cedula'),
				'cli_nom' 	=> $this->input->post('nombre'),
				'cli_ape' 	=> $this->input->post('apellido'),
				'cli_dir'	=> $this->input->post('direccion'),
				'cli_tel'	=> $this->input->post('telefono'),
				'cli_eml' 	=> $this->input->post('email'),
				);

				$response = $this->mcliente->save($data);
				echo json_encode($response);
			}
			else
			{
				//exit("Hi, I'm Asael");
				$response = "shit answer me something !";
				echo json_encode($response);
				//show_404();
			}
		}

		public function update()
		{
			if($this->input->is_ajax_request())
			{
				$data = array(
				'cli_nom' 	=> $this->input->post('nombre'),
				'cli_ape' 	=> $this->input->post('apellido'),
				'cli_dir'	=> $this->input->post('direccion'),
				'cli_tel'	=> $this->input->post('telefono'),
				'cli_eml' 	=> $this->input->post('email'),
				);

				$where = array(
				'cli_ced' => $this->input->post('cedula')
					);

				$response = $this->mcliente->update($data,$where);
				echo json_encode($response);
			}
			else
			{
				echo json_encode($response);
			}
		}

		
		public function get()
		{
			if($this->input->is_ajax_request())
			{
				$data = $this->mcliente->getAll();
				header('Content-type: application/json; charset=utf-8');
				echo json_encode(array("datos"=>$data));
			}
			else
			{
				exit("No direct script");
				show_404();	
			}
		}

		public function delete()
		{
			if($this->input->is_ajax_request())
			{
				$data = array(
					"cli_ced" => $this->input->post('id'));
				$response = $this->mcliente->delete($data);
				header('Content-type: application/json; charset=utf-8');
				echo json_encode($response);
			}
		}
	}

	

 ?>