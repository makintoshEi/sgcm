<?php 


	/**
	* Conexion a la Base de Datos
	*/
	class database
	{
		private $conexion;

		public function connect()
		{
			$conexionStatement = "host=localhost port=5432 dbname=GHBD_B user=postgres password=admin";
			$this->conexion = pg_connect($conexionStatement);
		}

		public function disconnect()
		{
			pg_close($this->conexion);
		}
		
	}



 ?>