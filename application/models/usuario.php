<?php 

/**
* 
*/
class Usuario extends CI_Model
{
	
	public function getUsuario($email = '')
	{
		$result = $this->db->query("SELECT * FROM usuario WHERE USU_CORREO = '".$email."'");
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return null;
		}
		
	}

	public function insert($value = null)
	{

		if ($value != null) {

			$nombre = $value['nombre'];
			$apellido = $value['apellido'];
			$correo = $value['correo'];
			$pass = $value['pass'];
			
			$SQL = "INSERT INTO usuario(USU_NOMBRE, USU_APELLIDO, USU_CORREO, USU_CLAVE)
			VALUES('$nombre', '$apellido', '$correo', $pass)";
			
			if ($this->db->query($SQL)) {
				return true;
			} 			

		} 
		return false;
			
	}


}


 ?>