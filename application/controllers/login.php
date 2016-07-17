<?php 
/**
* 
*/
class Login extends CI_Controller
{
	//En la cocke solo vale 8k de informacion
	public function index()
	{
		//codigniter utiliza un clase para manejar dato de tipo post o get, y... 
		//... en el html el atributo name es el identificador para recibirlo en el BackEnd...
		//... y el atributo id es para identificarlo en el FronEnd
		$user = $this->input->post('user');
		$password = $this->input->post('password');

		$this->load->model('usuario');
		$fila =	$this->usuario->getUsuario($user);

		if ($fila != null ) {
			if ($fila->USU_CLAVE == $password) {
				//Guardo en un array los datos
				$data = array('user' => $user, 'id' => $fila->USU_ID, 'login' => true );
				//colocar datos a una variable de Session
				$this->session->set_userdata($data);
			} else {
				//si el usuario no se Logeo correctamente se va al inicio
				header("Location: ".base_url());
			}
			
		} else {
			//reenviar a una pagina
			header("Location: ".base_url());
		}
		

		
		/*
	
		//obtener datos de la session
		echo $this->session->userdata('user');*/
			
	}

	public function logout()
	{
		//remover datos de Session
	    $this->session->sess_destroy();
	    //reenviar a la pagina home
	    header("Location: ".base_url());
	}
}

 ?>