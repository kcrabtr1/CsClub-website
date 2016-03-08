<?php
$rows = db_select("SELECT memberID, fName, lName, pic FROM member");
if(($rows !== false)&&(count($rows) > 0)) {
  foreach ($rows as $row){
    echo "<li>";
    echo" <img src= " . $row['pic'] . "  alt='User Image' width='128px' height='128px'>";
    echo "<a class='users-list-name'> ". $row['fName']." ".$row['lName'] ." </a>";
    echo "<i class='fa fa-unlock-alt'></i>Reset Password";
    echo "<span class='users-list-date'><i class='fa fa-trash'></i><a href='#' class='deco-none' data-toggle='modal' data-target='#deleteAccount'>Delete Account</a></span>";
    echo "</li>";
  }
}
 ?>
