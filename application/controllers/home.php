
<?php 

/**
* 
*/
class Home extends CI_Controller
{
	//function que se inicia cuando se llama a un controlador
	public function index()
		{

			//remover datos de Session
			//$this->session->sess_destroy();
			$this->load->view("amazon/headers");
			//$data = array('title' => 'Home', 'mensaje' => 'Hola mundo', 'info' => $info);
			//$this->load->view("amazon/home",$data);
			
			//Carga del modelo
			$this->load->model('producto');
			$productos = $this->producto->getProducto();

			//todo lo que obtenga de la tabla
			$result = $this->db->get('categoria');
			//almacener el valor en un array y la variable consulta es la cual se usara 
			//en el frotend.
			$data = array('consulta' => $result , 'listaProductos' => $productos);
			$this->load->view("amazon/home",$data);
		}	


	public function AllProdutos()
	{
		$this->load->model('producto');
		$result = $this->producto->getProducto();
		$data = array('listaProductos' => $result );
		print_r(json_encode($data));

	}
 	
}


?>