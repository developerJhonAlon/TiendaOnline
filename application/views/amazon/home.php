<body ng-app="productosApp" ng-controller="controlador1" >
	
	<nav role="navigation"class="navbar navbar-default">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!--A la parte derecha_left-->
				<form  class="navbar-form navbar-left">
					
				    <input id="txtBuscar" ng-model="nombre" type="text" class="form-control" placeholder="buscar">
					<button id="btnBuscar" ng-click="filtrarProductos()" class="btn btn-primary">Buscar</button>
				
				</form>
				<!-- <p>{{ nombre }} 2</p> -->
				<!--A la parte izquierda right-->
				<ul class="nav navbar-nav navbar-right">

					<!-- <li ng-repeat=" producto in productos">
							{{ producto.PRO_NOMBRE }}  {{ producto.PRO_ID }}
							
					</li> -->
										
					<li><a href="#">Mis Compras</a></li> 
					

					<?php if ($this->session->userdata('login')) { ?>
						
						<li><a href="<?= base_url()?>login/logout">Cerrar Session</a></li>

					<?php } else { ?>
						<li><a href="<?= base_url()?>usuarios/">Crear Cuenta</a></li>
						
					<li class="dropdown">
                      <a class='dropdown-toggle' href='#' data-toggle='dropdown' style="background: none;">INICIAR SESION ... <strong class='caret'></strong></a>
                      <div class='dropdown-menu' style='padding: 10px; padding-bottom: 0px; background: none; width: 400px;'>
                        <form action="<?= base_url()?>login" method='post' accept-charset='UTF-8' role="form">
                          <div class="form-group">
                            <input class='form-control large' style='text-align: center;' type='text' name='user' placeholder='usuario'/>
                          </div>
                          <div class='form-group'>
                            <input class='form-control large' style='text-align: center;' type='password' name='password' placeholder='contraseña' />
                          </div>
                          <div class='form-group'>
                            <button class='btn btn-primary' style='width: 380px;' type='submit'>INGRESAR</button>
                          </div>
                          </form>
                      </div>
                    </li>

                    <?php } ?>

				</ul>
			</div>
		</div>

	</nav>
	


<div class="container">
	<div class="row">
			<div class="col-lg-8">
				<h1 class="bg-primary">Amazon Ec</h1>

				
			</div>
			<div class="col-lg-4">
				<button class="btn btn-primary">
					<span class="icon-facebook"></span>	
				</button>
				<button class="btn btn-info">
					<span class="icon-twitter"></span>	
				</button>	
				<button class="btn btn-danger">
					<span class="icon-youtube2"></span>	
				</button>	
			</div>

	</div>	

</div>	

	<div class="container">
		<div class="row">
			<div class="col-md-4 ">
				
				

				<h2>Categorias</h2>
				<?php foreach ($consulta->result() as $fila) { ?>
				
				<p><?= $fila->CAT_NOMBRE ?></p>
				<?php } ?>
				<h2>Precios</h2>
				<p>Max : 300</p>
		    	<p>Min : 200</p>
	  
  				<div class="col-xs-3">
    				<input type="text" class="form-control" placeholder="Max">
  				</div>

  				<div class="col-xs-3">
    				<input type="text" class="form-control" placeholder="Min">
  				</div>

 				<div class="col-xs-3">
 					<button class="btn btn-primary"> > </button>
				</div>
			</div>
			
			<!---->
			<div class="col-md-6 ">
				<h3>Productos</h3>
           		 <div class="panel panel-default">
  				 	<div class="panel-heading">Catalogo de Productos</div>
  						<div class="panel-body">
					
						
							<div id="contenidoProd" ng-repeat=" producto in productos " class="col-lg-10 col-md-offset-2">
	       					 	<a href="htc-desire-620-dual-sim.php">
	       					 	<img ng-src="public/img/{{producto.PRO_IMAGEN}}" alt="Generic placeholder image" class="col-lg-6">
	       					 	</a>
	          					<p><strong>{{ producto.PRO_NOMBRE }}</strong></p>
	          					<p><span class="badge">{{ producto.PRO_PRECIO }}</span></p>
	          					<button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">
	 	 						Comprar 
	 	 						<i class="fa fa-shopping-cart">
	 	 						</i>
								</button>
	          					<p>{{ producto.PRO_DETALLE }}</p>

							</div>
						

						</div>

           			</div>
    		</div>
			<!---->

    	</div>

     				
	</div>

	<!--Eventos-->

	<script src="<?= base_url()?>public/js/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="<?= base_url()?>public/js/bootstrap.min.js"></script>  
	<!-- Se ubica los script al final para que primero cargue 
	la vista y luego ejecute codigo(esto mejora UX) -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.17/angular.min.js"></script>
	
	<!--Eventos-->
	<script>
		
		var miAplicacion = angular.module('productosApp',[]);

		miAplicacion.controller('controlador1',['$scope', function ($scope) {
			//$scope.descripcion = 2;
			$scope.productos = [];
			$scope.catalogo = [];

			// funcion para cargar todos los Productos al cargar la pagina.
			$(document).on('ready', function () {//Cuando el DOM este listo realiza un funcion AJAX
				// alert('hola mundo');
				$.ajax({
					url: '<?= base_url('home/obtenerListaProductos'); ?>',
					method: 'GET',
					dataType: 'JSON',
					data: {nombreProducto: $scope.nombre},
					success: function (json) {
						$scope.productos = json.productos;
						$scope.$apply();
					},
					error: function (xhr, text, code) {
						alert('error');
						console.log(code);
					}

				});
			});

			
			// funcion para la busqueda de un producto
			$scope.filtrarProductos = function () {
				//se declara el objeto JS por el cual Angular lo usara 
			
				$.ajax({
					url: '<?= base_url('home/obtenerProducto'); ?>',
					method: 'GET',
					dataType: 'JSON',
					data:{
						nombreProducto: $scope.nombre
					},
					success: function (json) {
						//Si se recibe una fila de una Tabla o u solo valor...
						//... solo debe mapear a JSON: $scope.productos = json;
						console.log(json);
						//se recibe un Array de Objectos por que viene de una tabla...
						//.... con variables filas, y para ser usada como Objeto JS..
						//.... se lo debe especificar la variables que se uso Controlador.
						$scope.productos = json.listaProductos;
						//para actualizar las variables relacionadas.
						$scope.$apply();

					},
					error: function (xhr, text, code) {
						alert('Error');
						console.log(code);

					}

				});

			}

			

		}]);

	
	</script>
</body>
</html>