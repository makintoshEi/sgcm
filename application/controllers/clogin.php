<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller
{

	function __construct()
	{
		# code...
		parent::__construct();
		//$this->load->model(array('mlogin')); //get the model to work with
	}
	/**public function start(){
		
		if($this->session->userdata('')){
			redirect('welcome');
		}
		if(isset($_POST['txtpassword'])){
			$this->load->model('mlogin');
			if($this->mlogin->login($_POST['txtcedula'],$_POST['txtpassword'])){ //md5($_POST['txtpassword'])
				$fila = $this->mlogin->getUser($cedula);
				if($fila != null){
					$data = array(
						'cedula' => $cedula,
						'id'     => $fila->usu_cod,
						'login'  => TRUE,
						'tipo'   => $fila->usu_tip_cod
					);
					$this->session->set_userdata($data);
				}else{
					echo "no consigio fila";//header("Location:".base_url());
				}		
				redirect('welcome');
			}else{
				redirect('clogin');
			}	
		}
		$this->load->view('vLogin');
	}*/

	public function index(){
		
			$cedula= $this->input->post('txtcedula');
			$password= $this->input->post('txtpassword');
			
			$this->load->model('mlogin');
			$fila = $this->mlogin->getUser($cedula);
			if($fila != null){
				echo "no esta vacio <br>";
				if($fila->usu_pas == $password ){
					echo "si es igual la password <br>";
					if($fila->usu_est=='t'){
						$data = array(
						'usu_cod' 	=> $fila->usu_cod,
						'nombre' 	=> $fila->usu_nom,
						'tipo'   	=> $fila->usu_tip_cod,
						'login'  	=> true
						);
						$this->session->set_userdata($data);
						echo json_encode($fila->usu_tip_cod);
						redirect('cmenu');
					}else{
						header("Location:".base_url());
					}
					
				}else{
					header("Location:".base_url());
				}
			}else{
				header("Location:".base_url());
			}
		
	}

	public function logout(){
		$this->session->sess_destroy();
		header("Location:".base_url());
	}
}






