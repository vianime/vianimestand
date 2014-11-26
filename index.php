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
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'class/class.php';
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'carga.php';

// Sesión
if (isset($_SESSION['user_zero'])) {
	$us = new Usersin();
	$user = $us->ui($_SESSION['user_zero']);
}

// Funsiones
$obj = new Work();
$barrauno = $obj->barra_uno();
$obj = new Work();
$capitulocom1 = $obj->lista_capitulos1();
$obj = new Work();
$ult15A = $obj->lista_animes15();
$obj = new Work();
$ult10O = $obj->lista_ovas10();
$obj = new Work();
$ult10P=$obj->lista_peliculas10();
$obj = new Work();
$ultimos = $obj->ultimos_agregados();
$obj = new Work();
$emision=$obj->lista_emision();
$obj = new Work();
$completa = $obj->lista_completaAOP();

// Página
$titulo = $slogan;
$bodyclass = '';
require_once HEADER;
require_once dirname(__FILE__) . DS . 'home.php';
require_once FOOTER;
?>
