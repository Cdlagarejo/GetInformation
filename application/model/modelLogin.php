<?php 
	/**
	* 
	*/
	class ModelLogin
	{
		
		function __construct($db)
		{
			try {
				$this->db = $db;
			} catch (PDOException $e) {
				exit('Database connection could not be established.');
			}
		}

        public function login($usuario,$contrasenia)
        {
            session_start();

            $sql = "SELECT * FROM tbl_Administrador WHERE usuario = :usuario";
            $query  =  $this->db->prepare($sql);
            $parameters =  array(':usuario' => $usuario);
            $query -> execute($parameters);
            return  $query->fetch(); 
        }


   }





   ?>