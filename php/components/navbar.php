<?php
  session_start();
?>

<head>
  <link rel="stylesheet" href="../../css/custom-index.css">
</head>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid ">
    <a translate="false" class="navbar-brand" href="#" style="font-weight:700; font-size:24px">EventsWeb<span style="color:rgb(176, 190, 199);">.net</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex end-100">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Eventos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Disertantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Patrocinadores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Consultas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">¡Registrarse ahora!</a>
        </li>

        <?php
          /* Si existe un usuario logueado le asigna su perfil y muestra el tag <a> que le corresponde. */

          if ($_SESSION['user_logged'] && $_SESSION['user_role'] == 'default'){
            ?>
            <!-- Vista de usuario default -->
            <li class="nav-item">
              <a class="nav-link" href="#">Mi Perfil</a>
            </li>
            <?php }
          else if ($_SESSION['user_logged'] && $_SESSION['user_role'] == 'admin'){
            ?>
            <!-- Vista de administrador -->
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Administrador</a>
            </li>
            <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>