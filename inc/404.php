<?php
  header("HTTP/1.0 404 Not Found");
?>
    <h2><?php if ($lang == "cs") { ?>Stránka nebyla nalezena<?php } else { ?>Not Found<?php } ?></h2>
    <p><?php if ($lang == "cs") { ?>Požadovaná stránka nebyla na tomto serveru nalezena<?php } else { ?>The requested URL was not found on this server<?php } ?>.</p>
