<?php
	// Połączenie z bazą MySQL
	require_once('functions/mysql_connect.php');
	
	// Utwórz tabelę, jeśli nie istnieje
	$create = "CREATE TABLE IF NOT EXISTS news(
		news_id int NOT NULL auto_increment,
		news_title varchar(100) NOT NULL,
		news_text varchar(1000) NOT NULL,
		news_date varchar(20) NOT NULL,
		PRIMARY KEY(news_id))";
	$query = mysql_query($create) or die(mysql_error());
		
	// Wyświetl newsy
	$query = "SELECT * FROM news ORDER BY news_id DESC LIMIT 0,3";
	$result = mysql_query($query) or die(mysql_error());
	
	if( mysql_num_rows($result) < 1) $null = 'Brak newsów'; // Jeśli w bazie brak newsów
	
	echo '<div style="overflow:auto;">'; // Wyrównuje newsy i tekst po lewej jako jeden blok
	echo '<div class="news_box rounded-5px">';
	
	while($row = mysql_fetch_array($result)) {
		extract($row);
		
		echo <<<ENTRY
				<div class="news">
					<div style="margin-bottom:-2px;padding:0px;">
					  <span class="title">$news_title</span>
					  <span class="date">$news_date</span>
					</div>
					<br/>
					<a href="?id=blog_remove&news_id=$news_id" style="float:right;margin-left:5px;$admin_yes" title="usuń post">
						<img src="images/minus.png" height="9" width="9">
					</a>
					$news_text				
				</div>
ENTRY;
	}
	
	echo $null; // zwróć zmienną określoną, gdy w bazie brak newsów
	
	echo '
	<a href="?id=blog_add" style="float:right;'.$admin_yes.'">dodaj news</a>
	</div> ';
	
	
	// Pozostała część pliku "home.php"
	echo <<<ENTRY
				<h2 class="main_title">
				Masz problemy ze spawaniem? 
				<br/>
				<span class="second">Trafiłeś pod najlepszy adres!!!</span>
				</h2>
				
				<br/>
				<br/>
				
				<div style="float:left;width:400px;font-size:13px;padding-left:20px;padding-right:20px;text-align:center;line-height:20px;">
				Spawamy od 15 lat na rynku wrocławskim....
				<br/>Współpracujemy z wieloma firmami z branży metalowej, motoryzacyjnej, jak równiż z osobami prywatnymi...
				<br/>Świadczymy usługi w najwyższej jakości....
				<br/>Nie wierzysz przyjdź i sprawdź!!!!
				</div>
					</div> <! -- Koniec wyrównainia jako jeden blok -->
				
				
				<div class="cross-doc rounded-10px" style="margin-top:30px;">
					<h2 style="border-bottom:1px solid #5C5C5C; padding-bottom:10px;">Nasze specjalizacje i cechy to:</h2>
					
<span style="line-height: 27px; font-size: 12px;">
<ul>
<li>spawanie w aluminium<br /></li>
<li>spawanie przewodów klimatyzacji<br /></li>
<li>precyzyjne usługi spawania w metalach kolorowych<br /></li>
<li>małe elementy<br /></li>
<li>nietypowe konstrukcje<br /></li>
<li>wysoka jakość<br /></li>
<li>wykonujemy według projektów klienta<br /></li>
<li>materiały powierzone przez klienta lub z własnych<br /></li>
<li>doradztwo w realizacji pomysłów<br /></li>
<li>wdrażanie własnych rozwiązań oraz projektów<br /></li>
<li>bardzo bogate doświadczenie<br /></li>
<li>ponad 25 letnie doświadczenie w branży metalowej ( spawanie i ślusarstwo)<br /></li>
<li>współpraca z firmami działającymi na rynku całego świata<br /></li>
<li>usługi masowej produkcji detali oraz pojedynczych elementów <br /></li>
</ul>
</span>	
				</div>
				
				
				<div style="font-size:15px;font-weight:bold;margin:40px;">
				Serdecznie zapraszamy do odwiedzenia nie tylko mojej strony internetowej, 
				<br/>ale również 
				<a href="https://maps.google.pl/maps/ms?msa=0&msid=202644905567190160635.0004a86ebbf2c2112ad9a&ie=UTF8&ll=51.082835,17.060974&spn=0.004718,0.003862&z=16&source=embed" style="color:orange">
				mojej firmy</a>.
				</div>
				
				<iframe width="780" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.pl/maps/ms?msa=0&amp;msid=202644905567190160635.0004a86ebbf2c2112ad9a&amp;hl=pl&amp;ie=UTF8&amp;t=m&amp;ll=51.082822,17.061081&amp;spn=0.016176,0.133724&amp;z=13&amp;output=embed"></iframe>

				
ENTRY;

?>
