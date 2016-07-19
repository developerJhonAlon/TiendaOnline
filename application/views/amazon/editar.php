<body>
	
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!--A la parte derecha_left-->
				<h1>Administración</h1>
				<!--A la parte izquierda right-->
				<ul class="nav navbar-nav navbar-right">
					
					<li><a href="<?= base_url()?>productos" >Gestionar Productos</a></li>

				</ul>
			</div>
		</div>

	</nav>


	<div class="col-lg-8">
		<h1>Amazon Ec</h1>
		<h2>Editar Producto</h2>
			<a href="htc-desire-620-dual-sim.php">
                 <img src="<?= base_url()?>public/img/<?= $datosEditar->PRO_IMAGEN?>" alt="Imagen no disponible" class="col-lg-4">
             </a>	
		
		
	</div>

	<div class="container">
		<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" >
					   <?php 
					    //form_open_multipart Nos ayuda a subir archivos al formulario
					   	echo form_open_multipart("productos/editarInformacion");

					   	$attribs = array('style' => 'display:none','value' => $datosEditar->PRO_ID);
					    echo form_input_text('id', '',$attribs);

					   	$attribs = array('value' => $datosEditar->PRO_NOMBRE);
					    echo form_input_text('nombre', 'Ingresa nombre',$attribs);

					    
					    echo form_input_textarea('detalle','Ingresa una descripción');

					    $attribs = array('value' =>  $datosEditar->PRO_PRECIO);
					    echo form_input_text('precio', 'Ingrese el Precio',$attribs);
					    
					    $attribs = array('value' =>  $datosEditar->PRO_STOCK);
					    echo form_input_text('stock', 'Ingresar stock',$attribs);
					

					    echo form_submit("Modificar Producto");
					    echo form_close(); 

					   ?>


				</div>
		</div>     
	</div>

		   
	<!--Eventos-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     
	<!--Eventos-->
	<script>
		$(document).ready(function () {
			//obtener el area de Texto y pasarle todo.
			$("#detalle").val("<?php echo  $datosEditar->PRO_DETALLE?>");
		});
	</script>
	
</body>
</html>