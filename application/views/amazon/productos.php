<body>
	
	<!--<ul class="nav nav-pills nav-justified">
		<li><a href="#">Carrito</a></li>
		<li><a href="#">Crear Usuario</a></li>
		
	</ul>-->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!--A la parte derecha_left-->
				<h1>Administración de Productos</h1>
				<!--A la parte izquierda right-->
				<ul class="nav navbar-nav navbar-right">
					
					<li><a href="<?= base_url()?>productos">Gestionar Productos</a></li>

				</ul>
			</div>
		</div>

	</nav>


	<div class="col-lg-12">
		<h1>Amazon Ec</h1>
		<!--<h1><?= $mensaje .' '. $info ?></h1> se obtiene una variable
		<a href="<?= base_url()?>link">Link</a>-->
		
	</div>
	<div class="col-lg-12">
		<p>
        	<a href="<?= base_url()?>productos/agregar" class="btn btn-success">Agregar</a>
    	</p>

	</div>
	
	<div class="container">
		<div class="col-lg-12">
		    <?php 
		    $content  = "<div class='table-responsive'>";
			$content .= "<table class='table table-hover table-bordered table-condensed'>";
			$content .=	"<thead>";
			$content .=	"<tr>";  
				
			$content .= "<th style='text-align: center;'>Nombre</th>";
			$content .= "<th style='text-align: center;'>Detalle</th>";
			$content .= "<th style='text-align: center;'>Precio</th>";
			$content .= "<th style='text-align: center;'>Stock</th>";
			$content .= "<th style='text-align: center;'>Eliminar</th>"; 
			$content .= "<th style='text-align: center;'>Modificar</th>";

			$content .=	"</tr>";
			$content .=	"</thead>";
			$content .=	"<tbody>";
				foreach ($listaProductos->result() as $row) {
					$content .= "<tr id='tr$row->PRO_ID'>";
					
						$content .= "<td style='text-align: center;'>" . $row->PRO_NOMBRE . "</td>";
						$content .= "<td style='text-align: center;'>" . $row->PRO_DETALLE. "</td>";
						$content .= "<td style='text-align: center;'>" . $row->PRO_PRECIO. "</td>";
						$content .= "<td style='text-align: center;'>" . $row->PRO_STOCK. "</td>";
						$content .= "<td style='text-align: center;'>
						<button name='$row->PRO_NOMBRE' id='$row->PRO_ID'>
							<span class='glyphicon glyphicon-trash'   aria-hidden='true'/>
                        </button>
						</td>";
						$content .= "<td style='text-align: center;'>
						<button>
						   <span class='glyphicon glyphicon-pencil' aria-hidden='true'/>
						</button>
						</td>";
					
					$content .= "</tr>";
				}
			$content .=	"</tbody>";
			$content .=	"</table>";
			$content .= "</div>";
			echo $content;
		     ?>
		</div>
		


	</div>

	   
	<!--Eventos-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     
	<!--Eventos-->

	<!--JQuery-->
	<script type="text/javascript">
		//Cuando el DOM este listo
		$(document).ready(
			//Funcion anomina
			function () {
				//todos los botones cuando da click recibe un evento
				$("button").on("click", function (e) {
					//obtener la referencia del boton y obtener las variables que son seleccionadas
					var name = $(this).attr("name");
					console.log(name);
					var id = $(this).attr("id");
					console.log(id);

					
					//ajax; q mantenga una solicitud, envio de peticion al Servidor
					var request;
					//Si ya existe una conexion no vuelva a ejecutar, para que sea asincrono
					if (request) {
						request.abort();
					}
					//asignar ajax
					request = $.ajax({
						//enviar un objeto JSON q recibe lo siguiente: URL, type, data
						url: "<?php echo base_url('productos/delete')?>",
						//metodo por el cual se envia la informacion.
						type: "POST", 
						//envio de información(data) como variables GET
						data: "prodname="+name+"&id="+id
					});

					//Lo que el servidor devuelve.
					request.done(function (response, textStatus, jqXHR) {
						//lo que no devuelve el Servidor cuando ejecuto el metodo
						console.log("response: "+response);
						//obtener tag y aplicar funcion Html(permite ingresar texto HTML a un elemento)
						$("#tr"+response).html("");//Borrar fila, #(esto hace referencia, q el tag es un id)
					});

					//Cuando se obtiene un error en el ajax
					request.fail(function (jqXHR, textStatus, thrown) {
						//imprimir en consola el error.
						consola.log("Error: "+textStatus);
					});

					//Sirve para cualquier funcion que suceda, esto se ejecuta
					request.always(function () {
						console.log("Termino la ejecucion de ajax");
					});

					//no se ejecute el evento.
					e.preventDefault();
					
				});
			});
		
	</script>

</body>
</html>