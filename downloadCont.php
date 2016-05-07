<?php
$rows = db_select("SELECT linkID, title, url FROM downloads");
if(($rows !== false)&&(count($rows) > 0)) {
  foreach ($rows as $row){
    echo "<a href=".$row['url']."><li>".$row['title']."</li></a>";
  }
}
?>
