<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Mregistro_usuario extends CI_Model
{
	
	function __construct(){
		parent::__construct();

	}

	public function save($data)
	{
		$this->db->insert('usuario',$data);
	}
}
?>