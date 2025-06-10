<?php
  session_start();

  //Account configs / Configuraciones de la cuenta.
  $_SESSION['user_logged'] = true;
  $_SESSION['user_role'] = 'admin';
  
  //User config / configuración de usuario
  $_SESSION['username'] = 'Fernando Rojas';

?>