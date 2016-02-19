<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model
{

	

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