<body>
	
	
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!--A la parte derecha_left-->
				<h1>Administración de Productos</h1>
				<!--A la parte izquierda right-->
				<ul class="nav navbar-nav navbar-right">
					
					<li><a href="<?= base_url()?>productos" >Gestionar Productos</a></li>

				</ul>
			</div>
		</div>

	</nav>


	<div class="col-lg-12">
		<h1>Amazon Ec</h1>
		<h2>Creación de Nuevo Producto</h2>
		
	</div>

	<div class="container">
		<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" >
					   <?php 
					    //form_open_multipart Nos ayuda a subir archivos al formulario
					   	echo form_open_multipart("productos/nuevo");	
					    echo form_input_text('nombre', 'Ingresa el nombre');
					    
					    echo form_input_textarea('detalle','Ingresa una descripción');
					    echo form_input_text('precio', 'Ingrese el Precio');
					    echo form_input_text('stock', 'Ingresar stock');
					    echo form_input_file('Selecciona imagen de producto');
					    echo form_submit("Guardar Producto");
					    echo form_close(); 

					   ?>


				</div>
		</div>     
	</div>

	   
	<!--Eventos-->

	<script src="<?= base_url()?>public/js/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?= base_url()?>public/js/bootstrap.min.js"></script>  
	<!--Eventos-->


</body>
</html>