<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <title>Formulario</title>
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
        </style>

    </head>


    <body class="container">
        <header>
            <br><br><br><br>
        </header>
        <div class="row">
 
            <div class="col-12">


                <center><h3>Registro</h3></center>

                <form name="registro" method="post" action="../Modelo/AgregarUsuario.php">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" aria-describedby="id" placeholder="Introduce id" name="id" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contraseña">Contraseña</label>
                        <input type="text" class="form-control" id="contrasena" aria-describedby="contrasena" placeholder="Introduce contraseña" name="contrasena" required>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" aria-describedby="nombre" name="nombre" placeholder="Introduce tu nombre" required>

                    </div>
                    
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" aria-describedby="apellido" name="apellido" placeholder="Introduce tu apellido" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" id="edad" aria-describedby="edad" name="edad" placeholder="Introduce edad" required>

                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" aria-describedby="correo" name="correo" placeholder="Introduce email" required>
                        <small id="correo" class="form-text text-muted">Tu email no sera compartido con nadie mas</small>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Introduce telefono"required>
                    </div>

                    <div class="form-group">
                        <input type="radio"  name="genero" id="hombre" value="M" checked>
                        <label form="hombre">Hombre</label>
                        <input type="radio"  name="genero" id="mujer" value="F" checked>
                        <label form="mujer">Mujer</label>
                    </div>

                    <div class="form-group">
                        <center><input type="Submit" name="submit" value="enviar"></center>
                </form>

            </div>


        </div>

    </div>
        
        <footer>
            <br><br><br><br>
        </footer>
</body>
</html>
