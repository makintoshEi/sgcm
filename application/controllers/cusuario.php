<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Cusuario extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model(array('musuario')); //get the model to work with
		}

		public function start()
		{
			$this->load->view('menu');
			$this->load->view('vUsuario');
		}
		
		public function save()
		{
			if ($this->input->is_ajax_request())
			{
				$data = array(
				'usu_ced' 	=> $this->input->post('txtcedula'),
				'usu_nom' 	=> $this->input->post('txtnombre'),
				'usu_ape' 	=> $this->input->post('txtapellido'),
				'usu_dir'	=> $this->input->post('txtdireccion'),
				'usu_eml'	=> $this->input->post('txtemail'),
				'usu_pas' 	=> $this->input->post('txtpassword'),
				'usu_tip_cod' 	=> $this->input->post('selectUser'),
				'usu_est' 	=> TRUE,
				);

				$response = $this->mregistro_usuario->save($data);
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
				'usu_nom' 	=> $this->input->post('nombre'),
				'usu_ape' 	=> $this->input->post('apellido'),
				'usu_dir'	=> $this->input->post('direccion'),
				'usu_eml'	=> $this->input->post('email'),
				'usu_pas' 	=> $this->input->post('password'),
				'usu_tip_cod' 	=> $this->input->post('tipo'),
				'usu_est' 	=> TRUE,
				);

				$where = array(
				'usu_ced' => $this->input->post('cedula')
					);

				$response = $this->musuario->update($data,$where);
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
				$data = $this->musuario->getAll();
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
						'usu_est' 	=> FALSE,
						);
				$where = array(
						'usu_ced' => $this->input->post('id')
						);
				$response = $this->musuario->delete($data,$where);
				header('Content-type: application/json; charset=utf-8');
				echo json_encode($response);
			}
		}

		public function activar()
		{
			if($this->input->is_ajax_request())
			{
				$data = array(
				'usu_est' 	=> TRUE,
				);
				$where = array(
								'usu_ced' => $this->input->post('id')
								);
				$response = $this->musuario->activar($data,$where);
				header('Content-type: application/json; charset=utf-8');
				echo json_encode($response);
			}else
			{
				echo json_encode($response);
			}
		}
	}

	

 ?>