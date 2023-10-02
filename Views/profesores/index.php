<div class="box-principal">
<h3 class="titulo">Listado de Profesores<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de profesores</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Imagen</th>
		      <th>Nombre</th>
		      <th>Edad</th>
		      <th>Materia</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php while($row = mysqli_fetch_array($datos)){ ?>
		  	<tr>
		  			<td><img class="imagen-avatar" src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $row['imagen']; ?>"></td>
			        <td><?php echo $row['nombre']; ?></td>
			    	<td><?php echo $row['edad']; ?></td>
			    	<td><?php echo $row['materia']; ?></td>
            <td>
			 	<a class="btn btn-warning" href="<?php echo URL; ?>profesores/editar/<?php echo $row['id']; ?>">Editar</a>
				<a class="btn btn-danger" href="<?php echo URL; ?>profesores/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
			</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>