<?php 
ob_start(); // Buferowanie
session_start(); // Sesja ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="pl" lang="pl">


<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta http-equiv="Expires" content="0" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<meta name="Description" content="Usługi spawalnicze, Wrocław - Krzyki. Najlepsze indywidualne podejście do klienta!" />
<meta name="Keywords" content="spawanie, wrocław, jacek, kozdraś" /> 
</head>



<title>
Oficjalna strona || Jacek Kozdraś - Usługi spawalnicze
</title>

<?php 	
// admin_auth
require_once('functions/admin_auth.php');
?>

<body class="body">

<script type='text/javascript'>
if (window.top !== window.self) {window.top.location = window.self.location;}
</script>

<div class="huge_container rounded-10px">


    <a onClick="javascript:window.location='index.php';" class="flaga PL"></a>
    <a onClick="javascript:window.location='http://www.google.com/translate_c?hl=pl&langpair=pl%7Cde&u=' + window.location.href;" class="flaga DE"></a>
    <a onClick="javascript:window.location='http://www.google.com/translate_c?hl=pl&langpair=pl%7Cen&u=' + window.location.href;" class="flaga EN"></a>


<div class="banner rounded-10px">
	
    <img src="images/ban-usl.png" style="margin-left:10px; margin-top:8px;" alt="USŁUGI SPAWALNICZO - ŚLUSARSKIE">
    <br />
    <img src="images/jacekspawa-s.png" style="margin-left: 10px; margin-top: -3px; padding:10px;" alt="www.jacekspawa.pl">  
	<br/>
	<div id="phone_number" class="phone_number rounded-10px">
		<img src="images/Phone-32.png" height="25" width="25">
		<span style="line-height:25px;display:block;float:right;">501101640</span>
	</div>
	<script>/*
		$("document").ready(function() {
		$("#phone_number").fadeIn(2000).delay(100).animate({
			opacity:'0.5'},1500);
		$("#phone_number").toggle(function(){
			$("#phone_number").animate({
			opacity:'1'},500);},
			function(){
			$("#phone_number").animate({
			opacity:'0.5'},500);}
			);
	}); */
	</script>
	
</div>


<div class="menu-horizontal">

        <a href="index.php" class="btn-horizontal" style="margin-left:5px;">Główna</a>

        <a id="offert-drop-bt" class="btn-horizontal">Oferta<img border="0" src="images/arrow-offert.png" style="position: relative; left:10px; bottom:2px" border="0"></a>

        <a href="?dir" class="btn-horizontal">Galeria</a>

        <a href="?id=contact" class="btn-horizontal">Kontakt</a>
          
<script type="text/javascript">
$(document).ready(function(){
  $("#offert-drop-bt").click(function(){
    $("#offert-drop").slideToggle();
    $("#offert-preview").delay(600).show(800) 
  });
});
</script>
        
        <div id="offert-drop" class="drop offert-drop shadow">
			<ul>
          <li><a href="x" class="drop-link">Bagażniki</a></li>
          <li><a href="x" class="drop-link">Zderzaki</a></li>
          <li><a href="x" class="drop-link">Osłony</a></li>
          <li><a href="x" class="drop-link">Elementy</a></li>
			</ul>
			
			<div id="offert-preview">
				Tutaj znajdzie się przykładowe zdjęcie z danej kategorii.
				<p>Jeśli mój pomysł jest zły, usunę ten efekt.
			</div>
        </div>
               
</div>



<div class="main_container">
          <?php
            // rozpoczynam adres za pomocą " ?id= "
            if(isset($_GET['id'])) include('PL/'.$_GET['id'].'.php');
            else {
			
			######
            // domyślna strona wczytująca się po wpisaniu index.php   
            ###### 
                 
            if(!isset($_GET['dir'])) // oczywiście jeśli nie jest to galeria
            include ("PL/home.php");
            
            
            if(isset($_GET['dir'])) // jeśli jest to galeria
            include ("gallery/integrate.php");
            }
          ?>
</div>


<div class="footer">
    Copyright | <a href="http://www.dualjack.cba.pl" style="color:#769DC5">Jakub Kuranda 2011</a>
    
    <!-- --><!-- --><!-- --><!-- -->
    <a style="<? echo$admin_yes?> float:right;color:#E2C912;" href="?id=admin_auth&logout">Wyloguj Admina</a>
	<img width="13" height="13" id="admin_acces" style="<? echo$admin_no?> cursor:pointer;" src="images/locker.png">
	
	<div id="admin_acces_box" style="display:none;">
		<form method="POST" action="?id=admin_auth">
			<input type="password" name="admin_pass" style="display:inline;width:65px;">
			<input type="submit" name="submit" value="zaloguj" style="display:inline;">
		</form>
	</div>

	<script>
		$("document").ready(function() {
			$("#admin_acces").click(function() {
				$("#admin_acces_box").slideToggle();
			});
		});
	</script>
	<!-- --><!-- --><!-- --><!-- -->
	
</div>


</body>

<?php ob_end_flush(); // Koniec buferowania ?>



