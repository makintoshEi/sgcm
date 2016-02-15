<?php


class Clogin extends CI_Controller
{

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model(array('mregistro_usuario')); //get the model to work with
	}
	public function start(){
		$this->load->view('vLogin');
	}

	public function login(){
		$cedula= $this->input->post('txtcedula');
		$password= $this->input->post('txtpassword');
		
		$this->load->model('mlogin');
		$fila = $this->mlogin->getUser($cedula);
		if($fila != null){
			if($fila->password == $password){
				$data = array(
					'cedula' => $cedula,
					'id'     => $fila->usu_cod,
					'login'  => TRUE 
				);
				$this->session->set_userdata($data);
			}else{
				header("Location:".base_url());
			}
		}else{
			header("Location:".base_url());
		}
		echo $this->session->userdata('cedula');
	}

	public function logout(){
		$this->session->sess_destroy();
		header("Location:".base_url());
	}
}






