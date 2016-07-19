<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class File extends CI_Model {
 
        public function UploadImage($path = '', $message = '')
        {
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png';
               
                $this->load->library('upload', $config);
               
                if ( ! $this->upload->do_upload()){
                        $error = $this->upload->display_errors();
                        echo $this->html();
                        if($message == ''){ //cierre de php ?>
                                <script type="text/javascript" charset="utf-8">
                                        alert("Error al subir la imagen");
                                </script> <?php
                        }else{            ?>
                                <script type="text/javascript" charset="utf-8">
                                        alert("<?= $message ?>");
                                </script> <?php
                        }
                        return null;
                }
                else{
                        $file_data = $this->upload->data();
                        return $file_data['file_name'];
                }
        }
 
        public function html($value='')
        {
                return "
                <html>
                <head>
                        <title> Upload Error </title>
                </head>
                <body>
               
                </body>
                </html>";
        }
 
}