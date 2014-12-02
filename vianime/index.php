<?php
/**
 * Cojap v1.0.1
 * Desarrollado por Jose Buelvas Santos (ihojose).
 * Desarrollado en Suba, Bogotá D.C., Colombia.
 * Desarrollado el jueves 27 de noviembre de 2014.
 * 
 * Licencia del propietario.
 */
 
// Verificación de versión de PHP. (PHP.5.5)
if (version_compare(phpversion(), '5.5.1', '<')) {
	printf('<strong>Cojap:</strong> Nesesitas la versión 5.5.1 de <a href="http://php.net">PHP</a> o superior para usar esta aplicación. Tu estás usando la versión <strong>%s</strong>', phpversion());
	exit(1);
}

// Variables constantes definidas.
define('_COJAP_BASE_', dirname($_SERVER['SCRIPT_NAME']));
define('_COJAP_ARCHIVO_', $_SERVER['SCRIPT_NAME']);
define('_COJAP_REL_', 'cojap');
define('_COJAP_OBJETIVO_', 'index.php');
define('_DS_', DIRECTORY_SEPARATOR);

// Carga Principal
require_once dirname(__FILE__) . _DS_ . _COJAP_REL_ . _DS_ . _COJAP_OBJETIVO_;