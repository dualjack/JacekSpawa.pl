<?php
	##--- HASŁO ---##
	$admin_pass = 'test';
	##---       ---##

// Nadaje uprawnienia, jeśli hasło się zgadza
if($_POST['admin_pass'] == $admin_pass)
	$_SESSION['admin_auth'] = 'true';
	
// Wylogowuje, jeśli w adresie znajdzie się "logout"
if(isset($_GET['logout'])) unset($_SESSION['admin_auth']);

// Powrót na główną
header("Location:index.php");
?>
