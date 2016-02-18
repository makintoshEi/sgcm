<?php 


	/**
	* 
	*/
	class Ccita extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mcita');
		}

		public function start()
		{
			$this->load->view('menu');
			$this->load->view('vcita');
		}

		//Obtiene el Medico asignado a una especialidad
		public function getMedico()
		{
			if($this->input->is_ajax_request())
			{
				
				$sql = "SELECT med_cod , medico ,med_ced FROM vista_asignacion WHERE esp_cod = ?";				
				$esp_cod = $this->input->post('esp_cod');
				$data = $this->mcita->customQueryN($sql,array($esp_cod));

				header('Content-type: application/json; charset=utf-8');
				echo json_encode(array("datos"=>$data));
			}
			else
			{
				exit("No direct scrip");
				show_404();	
			}
				
		}




	}




 ?>