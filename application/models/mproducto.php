<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Mproducto extends CI_Model
{
	
	function __construct(){
		parent::__construct();

	}
	
	public function save($data)
	{
		$this->db->insert('producto',$data);
	}

	public function update($data,$where)
	{
		$this->db->update('producto',$data,$where);
	}

	public function statementSQL($sql , $data)
	{
		$this->db->query($sql,$data);
	}

	public function getAll()
	{
		return $this->db->get('producto')->result_array();
	}

	public function delete($data)
	{
		return $this->db->delete('producto',$data);
	}

}

 ?>