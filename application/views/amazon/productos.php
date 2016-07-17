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
		<!--<h1><?= $mensaje .' '. $info ?></h1> se obtiene una variable
		<a href="<?= base_url()?>link">Link</a>-->
		
	</div>

	<div class="container">
		 <table class="table table-bordered">
            <thead>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <?php foreach ($listaProductos->result() as $producto) { ?>
                <tr>
                    <td><?= $producto->PRO_NOMBRE ?></td>

                    <td><?= $producto->PRO_DETALLE ?></td>

                    <td><?= $producto->PRO_PRECIO ?></td>

                    <td><?= $producto->PRO_STOCK ?></td> 
                    <td>
                        <a href="<?= base_url()?>productos/editar/<?= $producto->PRO_ID ?>" >
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                  
                        <a href="#">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
           
                    </td>
                
                </tr>
               <?php } ?>

            </c:forEach>
        </tbody>


    </table>


	</div>

	   
	<!--Eventos-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     
	<!--Eventos-->


</body>
</html>