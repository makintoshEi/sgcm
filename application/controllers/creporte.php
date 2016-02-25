<?php 


	/**
	* 
	*/
	class Creporte extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			//$this->load->model('mcita');
		}

		public function start()
		{
			//$this->load->view('menu');
			$this->load->view('vreporte');
		}

		
	}




 ?>