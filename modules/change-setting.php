<?php
//Include main database functions
include '../db/dbcore.php';
//Check if form has been submitted
if(!isset($_POST['themeChange'])){
    // Handle failure - log the error, notify administrator, etc.
  } else {
    // Quote and escape form submitted values
    $skinV = db_quote($_POST['skins']);
    //$bgV = db_quote($_POST['lName']);
    $uId = db_quote($_POST['uId']);

      if ($_POST['skins']===''){
        $result = db_query("UPDATE settings SET value1=$skinV, value2=$skinV WHERE setting=$uId");
        if($result === false) {
          echo db_error();
        } else {
          //redirect back to home
          header('location: ../ahome.php');
          exit;
        }
      }

      //Update skin in user setting
      $result = db_query("UPDATE settings SET value1=$skinV  WHERE setting=$uId");
      if($result === false) {
        echo db_error();
      } else {
        //redirect back to home
        header('location: ../ahome.php');
        exit;
      }
    }

if(!isset($_POST['notifyChange'])){
  }else{
    $nNum = db_quote($_POST['notifyNum']);
    $uId = db_quote($_POST['uId']);
    //Update skin in user setting
    $result = db_query("UPDATE settings SET value3=$nNum  WHERE setting=$uId");
    if($result === false) {
      echo db_error();
    } else {
      //redirect back to home
      header('location: ../ahome.php');
      exit;
    }
  }
 ?>
