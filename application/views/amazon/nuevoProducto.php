<body>
	
	


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
					    echo form_input_text('nombre', 'Ingresa nombre');
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     
	<!--Eventos-->


</body>
</html>