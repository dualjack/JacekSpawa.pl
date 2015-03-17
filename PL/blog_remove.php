<?php
// Połącz z bazą
require_once('functions/mysql_connect.php');

// Usuwa post
$query = "DELETE FROM news WHERE news_id = $_GET[news_id] ";

mysql_query($query) or die(mysql_error());

// Powróć na główną
header("Location:index.php");
?>
