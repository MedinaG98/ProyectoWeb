

<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<title>Formulario</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="validarRegistro.js"></script>
        
        
        <script type="text/javascript">
	$(document).ready(function()
		{
		$("#submit").click(function () {	 
			alert($('input:radio[name=opciones]:checked').val());
			$("#registro").submit();
			});
		 });
	</script>
    
    
    
	</head>
    
    <style>
	
	.container{
		
		border:1px solid black;
		padding:5px;
	}
	
	
	</style>
    
    
	<body class="container">

	
     <div class="row">
    <div class="col-4">
     
    </div>
    <div class="col-4">
     
       
    <center><h3>Registro</h3></center>
   
	<form name="registro" method="post" action="validarRegistro.php" onSubmit="return validarRegistro('id','nombre','edad','correo','telefono')">
     <div class="form-group">
    <label for="id">ID</label>
    <input type="text" class="form-control" id="id" aria-describedby="id" placeholder="Introduce id" name="id">
  </div>
  
   <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" name="nombre" placeholder="Introduce nombre">
    
  </div>
   <div class="form-group">
    <label for="edad">Edad</label>
    <input type="text" class="form-control" id="edad" aria-describedby="edad" name="edad" placeholder="Introduce edad">
    
  </div>
  <div class="form-group">
    <label for="correo">Correo</label>
    <input type="email" class="form-control" id="correo" aria-describedby="correo" name="correo" placeholder="Introduce email">
    <small id="correo" class="form-text text-muted">Tu email no sera compartido con nadie mas</small>
  </div>
  
  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Introduce telefono">
  </div>
  
  	<div class="form-group">
  	<input type="radio"  name="opciones" id="hombre" value="1" checked>
	<label form="hombre">Hombre</label>
	<input type="radio"  name="opciones" id="mujer" value="0" checked>
	<label form="mujer">Mujer</label>
  </div>
  
  <div class="form-group">
  <center><input type="Submit" name="submit" value="enviar"></center>
</form>

</div>
     
     
    </div>
    <div class="col-4">
    
    </div>
  </div>
    
    
    
    
    
    
    
    
    
  


</body>




</html>
	

























