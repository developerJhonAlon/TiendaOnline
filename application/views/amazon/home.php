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
 <button class="btn btn-primary"> ---> </button>
</div>
</div>


	<div class="col-md-8 ">
				<h2>Productos</h2>
           
           	<div  class="row">
           	<div class="panel panel-default">
  <div class="panel-heading">Catalogo del producto</div>
  <div class="panel-body">



<div class="col-lg-4">
        
          <a href="htc-desire-620-dual-sim.php">
          <img src="<?= base_url()?>plantilla/img/computador/comput1.png" alt="Generic placeholder image" class="col-lg-6"></a>
          
          <h2>HTC Desire 620</h2>
          <p><span class="badge">Precio $USD</span></p>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis 
euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi 
leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
 cursus magna.</p>
          <p>
        
  </button>  <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Comprar <i class="fa fa-shopping-cart"></i>
</button>

</div>

<div class="col-lg-4">
        
          <a href="htc-desire-620-dual-sim.php">
          <img src="<?= base_url()?>plantilla/img/computador/comput2.png" alt="Generic placeholder image" class="col-lg-6"></a>
          
          <h2>HTC Desire 620</h2>
          <p><span class="badge">Precio $USD</span></p>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis 
euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi 
leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
 cursus magna.</p>
          <p>
  
  </button>  <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Comprar <i class="fa fa-shopping-cart"></i>
</button>

</div>

<div class="col-lg-4">
        
          <a href="htc-desire-620-dual-sim.php">
          <img src="<?= base_url()?>plantilla/img/computador/comput1.png" alt="Generic placeholder image" class="col-lg-6"></a>
          
          <h2>HTC Desire 620</h2>
          <p><span class="badge">Precio $USD</span></p>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis 
euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi 
leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
 cursus magna.</p>
          <p>
        
  </button>  <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Comprar <i class="fa fa-shopping-cart"></i>
</button>

</div>


<div class="col-lg-4">
        
          <a href="htc-desire-620-dual-sim.php">
          <img src="<?= base_url()?>plantilla/img/computador/comput1.png" alt="Generic placeholder image" class="col-lg-6"></a>
          
          <h2>HTC Desire 620</h2>
          <p><span class="badge">Precio $USD</span></p>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis 
euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi 
leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
 cursus magna.</p>
          <p>
        
  </button>  <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Añadir este producto al carrito">Comprar <i class="fa fa-shopping-cart"></i>
</button>

</div>




 
  </div>
</div>


           	
           	</div>
         
			</div>
		</div>
	</div>

	

         

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