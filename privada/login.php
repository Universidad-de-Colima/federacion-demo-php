<?php
  require_once("../config.php");
   //Se asegura que un usuario est� autenticado. Si no lo est�, inicia el proceso de autenticaci�n.
  $saml ->requireAuth();
  //NOTA: El flujo no continuar� hasta que el usuario este correctamente autenticado por el IDP
?>