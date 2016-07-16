<body>
	
	<!--<ul class="nav nav-pills nav-justified">
		<li><a href="#">Carrito</a></li>
		<li><a href="#">Crear Usuario</a></li>
		
	</ul>-->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!--A la parte derecha_left-->
				<form  class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="buscar">

					</div>
					<button class="btn btn-primary">Buscar</button>
				</form>
				<!--A la parte izquierda right-->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Cuenta</a></li>
					<li><a href="#">Carrito</a></li>
					<li><a href="#">Gestionar Productos</a></li>

				</ul>
			</div>
		</div>

	</nav>


	<div class="col-lg-12">
		<h1>Amazon Ec</h1>
		<!--<h1><?= $mensaje .' '. $info ?></h1> se obtiene una variable
		<a href="<?= base_url()?>link">Link</a>-->
		
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4 ">
				<h2>Categorias</h2>
				<p>Computadores</p>
				<p>Celulares</p>
				<p>Audio</p>
			</div>
			<div class="col-md-4 col-md-offset-4">
				
				<h2>Productos</h2>
				<!-- Esto se traduce haci <img src="localhost:81/plantilla/img/comput1.png" >-->
				<img src="<?= base_url()?>plantilla/img/comput1.png" >

				<img src="<?= base_url()?>plantilla/img/comput2.png" >
				
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