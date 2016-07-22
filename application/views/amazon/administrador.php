<body>
	
	<!--<ul class="nav nav-pills nav-justified">
		<li><a href="#">Carrito</a></li>
		<li><a href="#">Crear Usuario</a></li>
		
	</ul>-->
	<nav class="navbar navbar-default">
		

	</nav>

	<div class="container">
		<div class="row">
				<div class="col-md-4 ">

					<h1>Amazon Ec</h1>
					<h3>Administración de Productos</h3>
					<br>
				
					   <?php 
					    //form_open_multipart Nos ayuda a subir archivos al formulario
					   	echo form_open("administrar/login");
					    echo form_input_text('user', 'Ingresa el usuario');
					    echo form_input_password('pass','Ingrese la clave');
					    echo form_submit("Sign in");
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

</body>
</html>