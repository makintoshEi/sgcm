<?php


class Mlogin extends CI_Model
{

	function __construct(){
		parent::__construct();
	}

	public function getUser($cedula)
	{
		$result = $this->db->query("SELECT * FROM usuario WHERE usu_ced = '".$cedula."'LIMIT 1");
		if($result->num_rows() > 0 ){
			return $result->row();
		}else{
			return null;
		}
	}
}



?>