<?
	$title = "Vyjížďka 2009";
	echo "<h2>$title</h2>\n";
	for ($i = 1; $i < 18; $i++) {
		echo photo("vyjizdka/$i.JPG", $title, "");
	}
?>
