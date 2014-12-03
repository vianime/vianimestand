<?php
/**
 * VIAnime. 
 * Carga de funsiones y definiciones importantes para 
 * el funsionamiento de la aplicación.
 * 
 * Versión del archivo 1.0.1stand
 * Creado el 2 de diciembre de 2014
 */

// Definiciones
define('DS', DIRECTORY_SEPARATOR);
define('_INC', 'inc');
define('_FUNC', dirname(__FILE__) . DS . _INC . DS . 'funsion.php');

// Funsiones de carga
function vianime_funsiones() {
	require_once _FUNC;
}