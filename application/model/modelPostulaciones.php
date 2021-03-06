<?php 

class ModelPostulaciones
{
	/**
     * @param object $db A PDO database connection
    */
	function __construct($db)
	{
		try {
			$this->db = $db;
		} catch (PDOException $e) {
			exit('Database connection could not be established.');
		}
	}

	public function getAllPostulaciones()
	{
		$sql = "SELECT nro_Documento, tipo_Documento, nombre_Postulante, apellido_Postulante,estado,ficha FROM tbl_postulante";
		$query = $this->db->prepare($sql);
		$query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO:':FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
		return $query->fetchAll();

	}
	public function getPostulacion($nro_Documento)
	{
		$sql = "SELECT nro_Documento, tipo_Documento, nombre_Postulante,apellido_Postulante,correo,sexo,estado,fecha_nacimiento,ficha from tbl_postulante where nro_Documento = :nro_Documento";
		$query = $this ->db->prepare($sql);
		$parameters =  array (':nro_Documento' => $nro_Documento);

		$query -> execute($parameters);

		return $query->fetch();
	}

	public function addPostulacion($nro_Documento,$tipo_Documento,$nombre_Postulante,$apellido_Postulante,$correo,$sexo,$fecha_nacimiento,$ficha)
	{
		$sql = "INSERT INTO tbl_postulante (nro_Documento,tipo_Documento,nombre_Postulante,apellido_Postulante,correo,sexo,fecha_nacimiento,ficha) Values (:nro_Documento,:tipo_Documento,:nombre_Postulante,:apellido_Postulante,:correo,:sexo,:fecha_nacimiento,:ficha)";
		$query = $this ->db ->prepare($sql);
		$parameters = array(':nro_Documento' => $nro_Documento, ':tipo_Documento' =>  strip_tags($tipo_Documento), ':nombre_Postulante' =>  strip_tags($nombre_Postulante), ':apellido_Postulante'=>  strip_tags($apellido_Postulante),':correo' =>  strip_tags($correo),':sexo' =>  strip_tags($sexo), ':fecha_nacimiento' => $fecha_nacimiento,':ficha' => $ficha);
		$query -> execute($parameters);

	}

	
	// public function updatePostulacion($nro_Documento,$tipo_Documento,$nombre_Postulante,$apellido_Postulante,$correo,$sexo,$estado,$fecha_nacimiento,$ficha,$nro_Documento)
	// {
	// 	$sql = "UPDATE tbl_postulante SET"
	// }
	

}	

?>