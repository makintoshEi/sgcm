<?php 


	/**
	* 
	*/
	class Mfactura extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function save($data)
		{
			$this->db->insert('factura',$data);
		}
	
		public function statementSQL($sql)
		{
			return $this->db->query($sql)->result_array();
		}

		public function customquery($sql , $data)
		{
			return $this->db->query($sql,$data)->row();
		}

		public function getAll()
		{
			return $this->db->get('factura')->result_array();
		}

		public function delete($data)
		{
			return $this->db->delete('factura',$data);
		}
	}

 ?>