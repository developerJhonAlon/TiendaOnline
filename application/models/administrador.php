<?php 

/**
* 
*/
class Administrador extends CI_Model
{
	
	public function getUser($user='')
	{
		$result = $this->db->query("SELECT * FROM administrador WHERE ADM_USER='".$user."'");
		if ($result->num_rows() > 0 ) {
			return $result->row();
		} else {
			return null;
		}
		
	}
}


 ?>