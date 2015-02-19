<?php 

class Login extends Controller
{
	
	function __construct(){
		parent::__construct("ModelLogin");
	}

	public function index()
	{
		// load views. within the views we can echo out $songs and $amount_of_songs easily

		require APP . 'views/login/login.php';
		require APP . 'views/_templates/footer.php';
	}
	public function login()
	{
		
		if (condition) {
			# code...
		}

	}




}

?>
