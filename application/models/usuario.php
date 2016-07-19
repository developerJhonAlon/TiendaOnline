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


}


 ?>