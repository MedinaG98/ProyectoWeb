<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FormularioArticulos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="validarRegistro.js"></script>
        
        <style type="text/css">
        header, footer{
            background: #8DBED5;
            color: #fff;
            text-align: center;
        }
        .color1{
            background: #34495e;
            color: #fff;
        }
        .contenedor{
            text-align: center;
        }
		
		body{
			
		background:rgba(206,206,206,1.00);
	

		}
		
		
        </style>
    </head>
    <body class="container">
        <header>
            <br><br><br><br>
        </header>
        <div class="row">
 
            <div class="col-12">
                <center><h3>Registro de articulos</h3></center>
                <form name="registroArticulos" method="post" action="dire.php" >
                    <div class="form-group">
                        <label for="narticulo">Nombre de articulo</label>
                        <input type="text" class="form-control" id="narticulo" aria-describedby="narticulo" placeholder="Introduce nombre articulo" name="narticulo" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" id="precio" aria-describedby="precio" name="precio" placeholder="Introduce precio" required>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
      
                   		<textarea name="descripcion" class="form-control" id="descripcion"  name="descripcion" placeholder="Introduce descripcion"></textarea>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="correo">Cantidad</label>
                        <input type="text" class="form-control" id="cantidad" aria-describedby="cantidad" name="cantidad" placeholder="Introduce inventario" required>
                    </div>
                   

                    
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Introduce usuario"required>
                    </div>
                    
                     <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Introduce id"required>
                    </div>
                   
                    <div class="form-group">
                        <center><input type="submit" name="submit" value="enviar"></center>
                </form>
            </div>
        </div>
    </div>
        
        <footer>
            <br><br><br><br>
        </footer>
</body>
</html>