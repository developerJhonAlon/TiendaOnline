<?php 

/**
* 
*/
class Usuarios extends CI_Controller
{
	
	public function index()
	{
		$this->load->view("amazon/headers");
		$this->load->helper("bootstrap");
		$this->load->view("amazon/nuevoUsuario");
	}

	public function nuevo()
	{
		$post = $this->input->post();
		$this->load->model('usuario');
		$bool = $this->usuario->insert($post);
		if ($bool) {
			$user = $post['correo'];
			$fila = $this->usuario->getUsuario($user);
			$data = array('user' => $fila->USU_CORREO, 'id' => $fila->USU_ID, 'login' => TRUE );
			$this->session->set_userdata($data);

			header("Location: ".base_url()."home/");

		} else {
			header("Location: ".base_url()."usuarios/");
		}
		
	}


}

 ?>