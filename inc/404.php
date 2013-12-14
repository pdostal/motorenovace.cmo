<?
	header("HTTP/1.0 404 Not Found");
?>
		<h2><? if ($lang == "cs") { ?>Stránka nebyla nalezena<? } else { ?>Not Found<? } ?></h2>
		<p><? if ($lang == "cs") { ?>Požadovaná stránka nebyla na tomto serveru nalezena<? } else { ?>The requested URL was not found on this server<? } ?>.</p>