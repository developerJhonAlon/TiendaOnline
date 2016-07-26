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

	public function insert($post = null)
	{
		if ($post != null) {
			$nombre = $post['nombre'];
			$detalle = $post['detalle'];
			$precio = $post['precio'];
			$stock = $post['stock'];
			$file_name = $post['file_name'];

			$SQL = "INSERT INTO producto(PRO_ID,PRO_NOMBRE,PRO_DETALLE,PRO_PRECIO,PRO_STOCK,PRO_IMAGEN) 
			VALUES(null,'$nombre','$detalle',$precio,$stock,'$file_name');";

			if ($this->db->query($SQL)) {
				return true;
			} 
		} 
		return false;
		
		
	}

	public function consultarProducto($value='')
	{
	 	$datos = $this->db->query("SELECT * FROM producto WHERE PRO_NOMBRE 
	 		LIKE '%$value%' ORDER BY PRO_NOMBRE ASC");
		//ahora se retorna transformandolo a un array de objetos porque...
		//...de esta manera se puede enviar al JSON
		//... Object {listaProductos: Array[1]}
        //... Object {listaProductos: Array[2]}
		return $datos->result();
	}	

	
}
 ?>