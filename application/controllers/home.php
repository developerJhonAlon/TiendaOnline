
<?php 

/**
* 
*/
class Home extends CI_Controller
{
	//function que se inicia cuando se llama a un controlador
	public function index($info = '')
		{
			$this->load->view("amazon/headers");
			//$data = array('title' => 'Home', 'mensaje' => 'Hola mundo', 'info' => $info);
			//$this->load->view("amazon/home",$data);
			
			//todo lo que obtenga de la tabla
			$result = $this->db->get('categoria');
			//almacener el valor en un array
			$data = array('consulta' => $result );
			$this->load->view("amazon/home",$data);
		}	
 	
}


?>