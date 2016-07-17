<?php 

/**
* 
*/
class Productos extends CI_Controller{
	
	public function index()
	{
		$this->load->view("amazon/headers");

		$this->load->model('producto');
		$listproductos = $this->producto->getProducto();
	
	 	$data = array('listaProductos' => $listproductos );

		$this->load->view("amazon/productos",$data);
	}

    public function editar($value = '')
    {
    	$this->load->view("amazon/headers");
    	
    	$this->load->model('producto');
    	$fila = $this->producto->getProductoById($value);
   		$data = array('datosEditar' => $fila );
    	$this->load->view("amazon/editar",$data);
    }

    public function editarInformacion($value = '')
    {

    	$this->index();
    }
    

}

 ?>