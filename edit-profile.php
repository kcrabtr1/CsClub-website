<?php

  include 'db/dbcore.php';

  // Connect to the database
  $connection = db_connect();

  $uId = $_SESSION['uId'];

  if(isset($_POST['profileSubmit'])){
      // Quote and escape form submitted values
    $nfname = db_quote($_POST['fname']);
    $nlname = db_quote($_POST['lname']);
    $nusername = db_quote($_POST['uname']);
    $nphone = db_quote($_POST['phone']);
    $nemail = db_quote($_POST['email']);
    $npass = db_quote($_POST['pass']);

    $result = db_query("UPDATE member SET fName=$nfname, lName=$nlname, username=$nusername, phone=$nphone, email=$nemail, password=$npass  WHERE memberID=$uId");
    if($result === false) {
      $error = db_error();
    }else{
      //Yay it worked tell the user
  }
  }
  
  //get data stuff
  $rows = db_select("SELECT fName,lName,username,phone,email,password FROM MEMBER WHERE memberID='".$uId."' ");
  if(($rows !== false)&&(count($rows) > 0)) {
    $fname=$rows[0]['fName'];
    $lname=$rows[0]['lName'];
    $username=$rows[0]['username'];
    $phone=$rows[0]['phone'];
    $email=$rows[0]['email'];
    $pass=$rows[0]['password'];
  }

 ?>
