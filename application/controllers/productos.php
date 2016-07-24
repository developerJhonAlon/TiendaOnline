<?php 

/**
* 
*/
class Productos extends CI_Controller{
    
    public function index()
    {
        
        if ($this->session->userdata('loginAdmin')) {
            $this->load->view("amazon/headers");
            $this->load->model('producto');
            $listproductos = $this->producto->getProducto();    
            $data = array('listaProductos' => $listproductos );
            $this->load->view("amazon/productos",$data);
          
        } else {
            header("Location: ".base_url()."administrar/");
        }
        

        
    }

    public function editar($value = '')
    {

        if ($this->session->userdata('loginAdmin')) {
            $this->load->view("amazon/headers");
            $this->load->helper('bootstrap'); 

            $this->load->model('producto');
            //Recibe el ojeto como una fila de los modelos y esta debe ser...
            //... enviado a un array para poder enviar a la pagina.
            $fila = $this->producto->getProductoById($value);
            $data = array('datosEditar' => $fila );
            $this->load->view("amazon/editar",$data);
        } else {
            header("Location: ".base_url()."administrar/");
        }
        

        
    }

    public function editarInformacion()
    {
        if ($this->session->userdata('loginAdmin')) {
            $post = $this->input->post();

            $data['PRO_NOMBRE'] = $post['nombre'];
            $data['PRO_DETALLE'] = $post['detalle'];
            $data['PRO_PRECIO'] = $post['precio'];
            $data['PRO_STOCK'] = $post['stock'];

            //$this->load->model('producto');
            $this->db->where("PRO_ID",$post['id']);
            if ($this->db->update("producto",$data)) {

                 header("Location: ".base_url('productos'));

            } else {

               echo "no se puede actualizar";
            }
        } else {
            header("Location: ".base_url()."administrar/");
 
        }
        
       
        
    }

     public function ver($value = '')
    {
        if ($this->session->userdata('loginAdmin')) {
                
            $this->load->view("amazon/headers");
            
            $this->load->model('producto');
            $fila = $this->producto->getProductoById($value);
            $data = array('datosVer' => $fila );
            $this->load->view("amazon/verInformacion",$data);

        } else {
           header("Location: ".base_url()."administrador/");
 
        }
    }
    
    public function agregar($value='')
    {
        if ($this->session->userdata('loginAdmin')) {
            $this->load->view("amazon/headers");
            //helper de un Tercero, este ayuda a que el formulario tome los estilos de bootstrap, porque si se usa...
            //.... el helper de Form de codigniter este no toma los estilos.
            $this->load->helper('bootstrap');  
            
            $this->load->view("amazon/nuevoProducto");
        } else {
            header("Location: ".base_url()."administrador/");
 
        }
        //for sin retonio
     
    }

    public function nuevo(){
        //obtener todo lo que hay en url del post
        if ($this->session->userdata('loginAdmin')) {
            $post = $this->input->post();
            $this->load->model('file');
            // ./ (acceso a la raiz)
            $file_name = $this->file->UploadImage('./public/img/','No es posible subir la imagen');
            $post['file_name'] = $file_name; //Asignar una nueva key
            $this->load->model('producto');
            $bool = $this->producto->insert($post);
            if ($bool) {
                header("Location: ".base_url()."productos");
            } else {    
                header("Location: ".base_url()."productos/agregar");
            }
        } else {
            header("Location: ".base_url()."administrador/");
 
        }
        
        
        

    }

    //esta funcion es llamada por AJAX y devuelve lo que encuentra en echo
    public function delete()
    {
        if ($this->session->userdata('loginAdmin')) {
            $post = $this->input->post();
            $prodname = $post['prodname'];
            $prodid = $post['id'];
            $SQL = "DELETE FROM producto WHERE PRO_ID = $prodid";
            if ($this->db->query($SQL)) {
                //cuando se ejecute el codigo JS(ajax) del Fronend....
                //... se ejecuta esta funcion y ajax nos devuelve lo que hay en el echo, en una funcion.
                echo $prodid;
            } else {
                echo false;
            }
        } else {
            header("Location: ".base_url()."administrador/");
 
        }
     
        
    }

}

 ?>