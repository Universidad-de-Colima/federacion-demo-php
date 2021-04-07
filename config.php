<?php 
    //header('Content-Type: text/html; charset=iso-8859-1');
    //La ruta donde se encuentra la librería principal de simplesamlphp
	$saml_lib_path = '/path/to/simplesamlphp/lib/_autoload.php';  
    require_once($saml_lib_path);
	// url de nuestro servidor, en este caso, carpeta demo.
    $SP_URL = 'https://'.$_SERVER['SERVER_NAME']."/demo/";  
    // Fuente de autenticación definida en el authsources del SP ej, default-sp
	$SP_ORIGEN= 'desarrollo4sistemas';   
    // Se crea la instancia del saml, pasando como parametro la fuente de autenticación.
	$saml = new SimpleSAML_Auth_Simple($SP_ORIGEN);   
?>