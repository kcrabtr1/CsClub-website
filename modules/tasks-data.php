<?php

  //include 'db/dbcore.php';

  $rows = db_select("SELECT jobID, dateCreated,submitBy,title,progress FROM job");
  if(($rows !== false)&&(count($rows) > 0)) {
    foreach ($rows as $row){
      echo "<tr>";
      echo "<td>" . $row["jobID"] . "</td>";
      echo "<td>" . $row["dateCreated"] . "</td>";
      echo "<td>" . $row["submitBy"] . "</td>";
      echo "<td>" . $row["title"] . "</td>";
      echo "<td>" . $row["progress"] . "</td>";
      echo "</tr>";
    }
  }


 ?>
