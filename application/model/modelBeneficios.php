<?php 

class ModelBeneficios
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
	public function getAllBeneficio()
	{
		$sql = "SELECT * FROM tbl_Beneficio";
		$query = $this->db->prepare($sql);
		$query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO:':FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
		return $query->fetchAll();

	}



}

?>