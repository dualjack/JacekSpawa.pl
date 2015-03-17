<?php
	##=====================##
	$host = 'localhost';
	$user = 'jacekspa_root';
	$pass = 'Mocher94';
	$database = 'jacekspa_new';
	##=====================##
	
	// Połącz
	$connect = mysql_connect($host, $user, $pass) or die('Błąd łączności z bazą MySQL');
	mysql_query("SET NAMES UTF8"); // Kodowanie
	
	// Wybierz bazę danych
	mysql_select_db($database) or die(mysql_error());
?>
