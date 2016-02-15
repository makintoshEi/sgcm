<?php


class Cregistro_usuario extends CI_Controller
{
	function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model(array('mregistro_usuario')); //get the model to work with
		}

	public function start(){
		$this->load->view('vRegistro_Usuario');
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
				'usu_tip_cod' 	=> '2',
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
	
}