<div class="box-principal">
<h3 class="titulo">Agregar Profesor<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nuevo profesor</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Nombre del profesor</label>
				        <input class="form-control" name="nombre" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Edad</label>
				        <input class="form-control" name="edad" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Imagen</label>
				        <input class="form-control" name="imagen" id="imagen" type="file" required>
				    </div>
                    <div class="form-group">
				      <label for="inputEmail" class="control-label">Materia</label>
				        <input class="form-control" name="materia" type="text" required>
				    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Registrar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>