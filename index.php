<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio  |  E-Web.net</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
  <link rel="icon" href="public/img/favicon/icon.png" type="image/x-icon">
  <!--  Mantener el Custom Index CSS al final  -->
  <link rel="stylesheet" href="css/custom-index.css">
  <link rel="stylesheet" href="css/custom-navbar.css">
</head>

<body id="general-container">
  <header id="general-header">
    <?php
      require_once 'php/components/navbar.php';
    ?>
  </header>

  <section id="general-body">


  </section>

  <?php 
    require_once 'php/components/footer.php';
  ?>
</body>

<!--  Scripts  -->
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>