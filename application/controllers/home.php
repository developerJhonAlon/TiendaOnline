
<?php 

/**
* 
*/
class Home extends CI_Controller
{
	//function que se inicia cuando se llama a un controlador
	public function index($info = '')
		{
			$data = array('title' => 'Home', 'mensaje' => 'Hola mundo', 'info' => $info);

			$this->load->view("amazon/headers");
			$this->load->view("amazon/home",$data);
		}	
 	
}


?>