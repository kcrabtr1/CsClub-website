<?php

//Get theme
$rows = db_select("SELECT value1, value2 FROM settings WHERE setting='default-theme'");
if(($rows !== false)&&(count($rows) > 0)) {
  $pageSkin = $rows[0]['value1'];
  $bgUrl = $rows[0]['value2'];
  echo '<style>.layout-boxed{background:url('.$bgUrl.') repeat fixed;}</style>';
}
?>
