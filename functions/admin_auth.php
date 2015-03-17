<?php
## Widoczność tylko dla admina
## np. echo $admin_yes
	
	if($_SESSION['admin_auth'] == 'true')
	$admin_yes = 'diplay:block;'; else
	$admin_yes = 'display:none;';
	
## Ukryj widoczność dla admina
## np. echo $admin_no
	
	if($_SESSION['admin_auth'] == 'true')
	$admin_no = 'display:none;'; else
	$admin_no = 'display:block;';
?>
