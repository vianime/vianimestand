<?php
/**
 * VIAnime.
 * Funsiones, conexión a base de datos.
 * Este archivo permite la interacción de la aplicación
 * con la base de datos MySQL.
 * 
 * No se debe modificar este archivo sin previo conocimiento de
 * programación en PHP5.3.1 y MySQL.
 */
 
// Sesión asegurada (cerrado de sesión y sesión iniciada)
function secure_session() {
	session_start();
	
	// Cerrar sesión
	if (!empty($_GET['cerrarsesion'])) {
		session_destroy();
		
		// Vuelve a index
		header('Location: index');
	}
}