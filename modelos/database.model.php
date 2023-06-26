<?php
	class Database {
		private $host;
		private $username;
		private $pass;
		private $dbname;
		private $port;

		private $key;
		private $coderesult;

		public function __construct(){
			$this->host = 'localhost';
			$this->username = 'root';
			$this->pass = '';
			$this->dbname = 'congreso_asq';

			$this->port = 3306;
		}

		public function generarConexion(){
			$result = mysqli_connect(
				$this->getHost(),
				$this->getUsername(),
				$this->getPass(),
				$this->getDbname(),
				$this->getPort()
			);

			if( !$result ){
				$this->setKey( null );
				$this->setCoderesult( mysqli_connect_errno() );
			}else{
				$this->setKey( $result );
			}
		}

		public function getConn(){
			return $this->getKey();
		}

	    /**
	     * @return mixed
	     */
	    public function getHost()
	    {
	        return $this->host;
	    }

	    /**
	     * @param mixed $host
	     *
	     * @return self
	     */
	    public function setHost($host)
	    {
	        $this->host = $host;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getUsername()
	    {
	        return $this->username;
	    }

	    /**
	     * @param mixed $username
	     *
	     * @return self
	     */
	    public function setUsername($username)
	    {
	        $this->username = $username;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getPass()
	    {
	        return $this->pass;
	    }

	    /**
	     * @param mixed $pass
	     *
	     * @return self
	     */
	    public function setPass($pass)
	    {
	        $this->pass = $pass;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getDbname()
	    {
	        return $this->dbname;
	    }

	    /**
	     * @param mixed $dbname
	     *
	     * @return self
	     */
	    public function setDbname($dbname)
	    {
	        $this->dbname = $dbname;

	        return $this;
	    }

	    /**
	     * @return mixed
	     */
	    public function getKey()
	    {
	        return $this->key;
	    }

	    /**
	     * @param mixed $key
	     *
	     * @return self
	     */
	    public function setKey($key)
	    {
	        $this->key = $key;

	        return $this;
	    }
	
		/**
		 * @return mixed
		 */
		public function getPort()
		{
		    return $this->port;
		}

		/**
		 * @param mixed $port
		 *
		 * @return self
		 */
		public function setPort($port)
		{
		    $this->port = $port;

		    return $this;
		}

		/**
		 * @return mixed
		 */
		public function getCoderesult() : int
		{
		    return $this->coderesult;
		}

		/**
		 * @param mixed $coderesult
		 *
		 * @return self
		 */
		public function setCoderesult(int $coderesult)
		{
		    $this->coderesult = $coderesult;

		    return $this;
		}
}
?>