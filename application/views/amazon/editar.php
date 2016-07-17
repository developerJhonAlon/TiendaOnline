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
					<li><a href="<?= base_url()?>producto">Gestionar Productos</a></li>

				</ul>
			</div>
		</div>

	</nav>


	<div class="col-lg-12">
		<h1>Amazon Ec</h1>
		<h2>Editar</h2>
		
	</div>

	<div class="container">
		 <form name="form" action="<?= base_url()?>/productos/editarInformacion" method="post">
            
            <div class="form-group">
               <label for="nombrePro">Nombre:</label>
               <!--name es el identificador para recibirlo en el backend-->
               <input type="text" class="form-control" id="nombrePro" 
                      placeholder="Nombre" value="<?= $datosEditar->PRO_NOMBRE?>">
            </div>

             <div class="form-group">
               <label for="descripcionPro">Descripción:</label>
               <input type="text" class="form-control" id="descripcionPro" 
                      placeholder="Descripcion" value="<?= $datosEditar->PRO_DETALLE?>">
            </div>

			<div class="form-group">
               <label for="precioPro">Precio:</label>
               <input type="text" class="form-control" id="precioPro" 
                      placeholder="Precio" value="<?= $datosEditar->PRO_PRECIO?>">
            </div>

            <div class="form-group">
               <label for="precioPro">Stock:</label>
               <input type="text" class="form-control" id="precioStock" 
                      placeholder="Stock" value="<?= $datosEditar->PRO_STOCK?>">
            </div>

            
            <button type="submit" class="btn btn-default">Enviar</button>
        </form>


	</div>

	   
	<!--Eventos-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     
	<!--Eventos-->


</body>
</html>