<?php
/**
 * Archivo nidex.php, este archivo es el inicial de la aplicación.
 * Este no tiene ningún contenido, solo carga los archivos de root.
 * 
 * La versión de este archivo en VIAnime Stand es V1.0.1stand
 * creado el 23 de noviembre de 2014.
 * La licencia de la aplicación es MIT versión 2.
 * 
 * NOTA: La aplicación está basada en gran parte en el clon de AnimeID 2011.
 */

// Verificación de versión de PHP. Debe ser igual o mayor a PHP 5.5
if (version_compare(phpversion(), '5.3.1', '<')) {
	require_once dirname(__FILE__)
	 . DIRECTORY_SEPARATOR
	 . 'vianime'
	 . DIRECTORY_SEPARATOR
	 . 'common'
	 . DIRECTORY_SEPARATOR
	 . 'phpversion.php';
	exit(1);
}
