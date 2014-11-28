<?php
/**
 * Archivo de carga de VIAnime stand V1.0.1stand
 * Este archivo es indispensable para el funsionamiento de
 * la aplicación.
 * 
 * La carga de idiomas está en desarrollo.
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'local.php';
switch ($idioma) {
	case 'español':
		$lang = 'es';
		break;
}
define('LANG', $lang);
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'languages' . LANG . '.php';

// Definiciones
define('DS', DIRECTORY_SEPARATOR);
define('_HEADER', dirname(__FILE__) . DS . 'header.php');
define('_FOOTER', dirname(__FILE__) . DS . 'footer.php');
define('_SHEADER', dirname(__FILE__) . DS . 'sheader.php');
define('_SFOOTER', dirname(__FILE__) . DS . 'sfooter.php');
define('_URLSITIO', $web);
define('_SITIO', dirname(__FILE__) . DS);
define('_TITULO', $titulopri);
define('_TIT', $titulo);
?>
