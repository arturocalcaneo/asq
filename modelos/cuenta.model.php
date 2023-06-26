<?php
	require_once 'database.model.php';

	class Cuenta {

		private $nombre;
		private $apellidos;
		private $num_seguridad_social;
		private $id_usuario;

		private $db;

		/**
		 * Class Constructor
		 * @param    $nombre   
		 * @param    $apellidos   
		 * @param    $num_seguridad_social   
		 * @param    $id_usuario   
		 * @param    $db   
		 */
		public function __construct($nombre, $apellidos, $num_seguridad_social, $id_usuario, $db)
		{
			$this->nombre = $nombre;
			$this->apellidos = $apellidos;
			$this->num_seguridad_social = $num_seguridad_social;
			$this->id_usuario = $id_usuario;
			$this->db = $db;
		}

		public function getCuentas($cond = ""){
			$query = 'SELECT * FROM cuentas';

			if( strcmp($cond, "") != 0 ){
				$query .=  ' WHERE ' . $cond;
			}

			$result = mysqli_query($this->db->getConn(), $query);

			return mysqli_fetch_assoc($result);
		}
	
	    /**
	     * @return mixed
	     */
	    public function getNombre()
	    {
	        return $this->nombre;
	    }

	    /**
	     * @param mixed $nombre
	     *
	     * @return self
	     */
	    public function setNombre($nombre)
	    {
	        $this->nombre = $nombre;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getApellidos()
	    {
	        return $this->apellidos;
	    }

	    /**
	     * @param mixed $apellidos
	     *
	     * @return self
	     */
	    public function setApellidos($apellidos)
	    {
	        $this->apellidos = $apellidos;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getNumSeguridadSocial()
	    {
	        return $this->num_seguridad_social;
	    }

	    /**
	     * @param mixed $num_seguridad_social
	     *
	     * @return self
	     */
	    public function setNumSeguridadSocial($num_seguridad_social)
	    {
	        $this->num_seguridad_social = $num_seguridad_social;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getIdUsuario()
	    {
	        return $this->id_usuario;
	    }

	    /**
	     * @param mixed $id_usuario
	     *
	     * @return self
	     */
	    public function setIdUsuario($id_usuario)
	    {
	        $this->id_usuario = $id_usuario;

	        return $this;
	    }
	}
?>