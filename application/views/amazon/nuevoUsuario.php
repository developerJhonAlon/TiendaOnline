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
					<h3>Crear Cuenta</h3>
					<br>
				
					   <?php 
					   	echo form_open("usuarios/nuevo");
					    echo form_input_text('nombre', 'Ingrese sus nombres');
					    echo form_input_text('apellido', 'Ingrese sus apellidos');
					    echo form_input_text('correo', 'Ingrese su correo');
					    echo form_input_password('pass','Ingrese un clave');
					    echo form_submit("Registrar");
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