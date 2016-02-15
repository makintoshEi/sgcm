<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Mcliente extends CI_Model
{
	
	function __construct(){
		parent::__construct();

	}
	
	public function save($data)
	{
		$this->db->insert('cliente',$data);
	}

	public function update($data,$where)
	{
		$this->db->update('cliente',$data,$where);
	}

	public function statementSQL($sql , $data)
	{
		$this->db->query($sql,$data);
	}

	public function getAll()
	{
		return $this->db->get('cliente')->result_array();
	}

	public function delete($data)
	{
		return $this->db->delete('cliente',$data);
	}

}

 ?>