<?php
/**
 * VIAnime Stand v1.0.1
 * Archivo principal de la aplicación.
 * 
 * Licencia GNU Versión 2 de junio de 1991.
 */
if (!file_exists('include/config.inc.php')) {
	header('location: install.php');
	exit;
}
?>