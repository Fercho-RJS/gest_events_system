<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro  |  E-Web.net</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="icon" href="../public/img/favicon/icon.png" type="image/x-icon">
    <!--  Mantener el Custom Index CSS al final  -->
    <link rel="stylesheet" href="../../css/custom-index.css">
    <link rel="stylesheet" href="../../css/custom-navbar.css">
    <link rel="stylesheet" href="../../css/custom-registro.css">
</head>

<body id="general-container">
    <header id="general-header">
        <?php
        require_once '../../php/components/navbar.php';
        ?>
    </header>

    <section id="general-body" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-container">
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
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded bg-light">
                        <div class="form-group row">
                            <h6 class="text-center">¿Ya estás registrado? <a href="pg_login.php">Login</a></h6>
                        </div>

                        <h6><strong>¿Por qué asistir?</strong></h6>
                        <ul>
                            <li>Accedé a eventos exclusivos con especialistas en cada temática</li>
                            <li>Conectate con personas con intereses similares</li>
                            <li>Actualizá tus conocimientos en sesiones dinámicas y prácticas</li>
                        </ul>


                        <h6><strong>Preguntas frecuentes</strong></h6>
                        <ul>
                            <li>¿Cómo me registro en un evento?</li>
                            <li>¿Puedo asistir a varios eventos distintos?</li>
                            <li>¿Se entrega certificado de asistencia?</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
        require_once '../../php/components/footer.php';
    ?>
</body>

<!--  Scripts  -->
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>