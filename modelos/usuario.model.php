<?php
	require_once 'database.model.php';

	class Usuario {

		private $id_usuario;
		private $correo;
		private $contra;
		private $fecha_registro;

		private $db;

		/**
		 * Class Constructor
		 * @param    $id_usuario   
		 * @param    $correo   
		 * @param    $contra   
		 * @param    $fecha_registro   
		 * @param    $db   
		 */
		public function __construct($id_usuario, $correo, $contra, $fecha_registro, $db)
		{
			$this->id_usuario = $id_usuario;
			$this->correo = $correo;
			$this->contra = $contra;
			$this->fecha_registro = $fecha_registro;
			$this->db = new Database();
		}

		public function getUsuarios($cond = ""){
			$query = 'SELECT * FROM usuarios';

			if( strcmp($cond, "") != 0 ){
				$query .= ' WHERE ' . $cond;
			}

			$result = mysqli_query($this->db->getConn(), $query);

			return mysqli_fetch_assoc($result);
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

	    /**
	     * @return mixed
	     */
	    public function getCorreo()
	    {
	        return $this->correo;
	    }

	    /**
	     * @param mixed $correo
	     *
	     * @return self
	     */
	    public function setCorreo($correo)
	    {
	        $this->correo = $correo;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getContra()
	    {
	        return $this->contra;
	    }

	    /**
	     * @param mixed $contra
	     *
	     * @return self
	     */
	    public function setContra($contra)
	    {
	        $this->contra = $contra;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getFechaRegistro()
	    {
	        return $this->fecha_registro;
	    }

	    /**
	     * @param mixed $fecha_registro
	     *
	     * @return self
	     */
	    public function setFechaRegistro($fecha_registro)
	    {
	        $this->fecha_registro = $fecha_registro;

	        return $this;
	    }
	}
?>