<?php 
/**
* 
*/
class Producto extends CI_Model
{
	//esta metodo repornara pero no es necesario especificar su retorno.
	public function getProducto()
	{
		return $this->db->get('producto');

	}

	//Consultar un producto por ID
	public function getProductoById($value='')
	{

		$result = $this->db->query("SELECT * FROM producto WHERE PRO_ID = ".$value." ");
		//tranformar o obtener una sola fila
		return $result->row();
	}
}
 ?>