<?php
    session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
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
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <header>
            <br><br><br><br>
        </header>
        
        <div class="contenedor">
            <br>
            <br>
            <br>
            <img src="../Imagenes/user.png" width="100" height="100"/>
            <br>
            <br>
            <br>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center container">
                    <form action="../Modelo/valida.php" method="post">
                        <div class="form-group">
                            <label for="uname" class="control-label">Usuario:</label>
                            <input type="text" class="form-control" name="user">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Contraseña:</label>
                            <input type="password" class="form-control" name="pwd">
                        </div>
                        <br>
                        <center><button type="submit" class="btn btn-secondary">Entrar</button> </center>
                        <br>
                        <br>
                        <center><a href="registro.php">¿No te has registrado?</a></center>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        
        <footer>
            <br><br><br><br>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    </body>
</html>