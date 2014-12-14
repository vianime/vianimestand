<?php
/**
 * VIAnime Stand v1.0.1
 * Archivo principal de instalación.
 * 
 * creado el 13 de diciembre de 2014.
 * Facilita la instalación de la aplicación a los
 * usuarios que no tienen grandes conocimientos en
 * programación PHP.
 */
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'include/funsiones.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'include/ajustes.php';

// Variables Globales
$db_prefijo				= isset($_POST['db_prefijo']) ? strtolower(stripcslashes($_POST['db_prefijo'])) : 'vi101_';
$vi_ins_tipo			= isset($_POST['vi_ins_tipo']) ? $_POST['vi_ins_tipo'] : 'new';
$act					= isset($_POST['act']) ? $_POST['act'] : '';
$completado				= false;
$error_mg				= array();
$error_msg				= '';

$username				= isset($_POST['username']) ? stripcslashes($_POST['username']) : '';
$contrasena				= isset($_POST['contrasena']) ? stripcslashes($_POST['contrasena']) : '';
$dbname					= isset($_POST['dbname']) ? stripcslashes($_POST['dbname']) : '';
$dbhost					= isset($_POST['dbhost']) ? stripcslashes($_POST['dbhost']) : '';
$dbuser					= isset($_POST['dbuser']) ? stripcslashes($_POST['dbuser']) : '';
$dbpass					= isset($_POST['dbpass']) ? stripcslashes($_POST['dbpass']) : '';
?>