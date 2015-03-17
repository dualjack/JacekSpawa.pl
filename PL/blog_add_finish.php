<?php

// Połącz z bazą  MySQL
require_once('functions/mysql_connect.php');

// Dodaj slashe dla MySQL
$text = mysql_real_escape_string($_POST['text']);
$title = mysql_real_escape_string($_POST['title']);

// --- Data --- //
$d = date(j);

$x = date(n); // Podstaw za x liczbę porządkowa miesiąca
	if($x == 1) $m = "Styczeń";
	if($x == 2) $m = "Luty";
	if($x == 3) $m = "Marzec";
	if($x == 4) $m = "Kwiecień";
	if($x == 5) $m = "Maj";
	if($x == 6) $m = "Czerwiec";
	if($x == 7) $m = "Lipiec";
	if($x == 8) $m = "Sierpień";
	if($x == 9) $m = "Wrzesień";
	if($x == 10) $m = "Październik";
	if($x == 11) $m = "Listopad";
	if($x == 12) $m = "Grudzień";

$r = date(Y);

// Sparwdź, czy checkbox "date" został zaznaczony
if($_POST['date'] == 'true') $date = "$d $m $r" ;

// ---      --- //

$query = "INSERT INTO news(news_id,news_title,news_text,news_date)
		VALUES ('','$title','$text','$date')";

mysql_query($query) or die("<span style=\"color:white;font-size:15px;\">Błąd wprowadzania danych</span>");

// Powróć na główną
header("Location:index.php");

?>
