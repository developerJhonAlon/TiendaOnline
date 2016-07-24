<?php 

/**
* 
*/
class Administrar extends CI_Controller
{

	public function index()
	{
		$this->load->view("amazon/headers");
	    $this->load->helper('bootstrap');  
		$this->load->view("amazon/administrador");

	}

	public function login()
	{
		$post = $this->input->post();
		$user = $post['user'];
		$pass = $post['pass'];

		$this->load->model('administrador');
		$fila = $this->administrador->getUser($user);
		if ($fila != null) {
			if ($fila->ADM_CLAVE == $pass ) {
				$data = array('user' => $user,'id' => $fila->ADM_ID, 'loginAdmin' => true );
				$this->session->set_userdata($data);
				header("Location: ".base_url()."productos/");
			} else {
				header("Location: ".base_url()."administrar/");

			}
			
		} else {
			header("Location: ".base_url()."administrar/");
		}
		

	}

	public function logout()
	{

		$this->session->sess_destroy();
		header("Location: ".base_url()."administrar/");
	}
	
}


 ?>