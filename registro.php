<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <!--  Mantener el Custom Index CSS al final  -->
    <link rel="stylesheet" href="css/custom-index.css">
    <link rel="stylesheet" href="css/registro-style.css">
</head>

<body id="general-container">
    <header id="general-header">
        <?php
        require_once 'php/components/navbar.php';
        ?>
    </header>

    <section id="general-body">
        <div class="form-container mt-5">
            <h2 class="text-center mb-4">Formulario de Registro</h2>
            <form method="POST" action="./procesar_registro.php">
                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12 mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" id="dni" name="dni">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12 mb-3">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="clave">Clave</label>
                        <input type="password" class="form-control" id="clave" name="clave">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="rep_clave">Repetir Clave</label>
                        <input type="password" class="form-control" id="rep_clave" name="rep_clave">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
            </form>
            <?php
                /* Evalúa si existe mensaje enviado desde el archivo
                Si existe mensaje, entonces evalúa si es un mensaje de error o de OK*/
                if (isset($_GET["mensaje"])){
                    if($_GET["mensaje"]!="ok"){
                        echo "<div class='text-center alert alert-danger mt-4 mb-5'>".$_GET["mensaje"]."</div>"; 
                    }else{
                        echo "<div class='text-center alert alert-success mt-4 mb-5'>✅ Registro exitoso.</div>";  
                    }
                } 
            ?>  
        </div>
    </section>

    <footer id="general-footer">
        <!--  Pie de página  -->
    </footer>
</body>

<!--  Scripts  -->
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>