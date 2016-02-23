<?php
	// First start a session. This should be right at the top of your login page.
	session_start();

	// Check to see if this run of the script was caused by our login submit button being clicked.
	if (isset($_POST['loginSubmit'])) {

    include_once 'db/dbcore.php';
		// Also check that our email address and password were passed along. If not, jump
		// down to our error message about providing both pieces of information.
		if (isset($_POST['userN']) && isset($_POST['loginPass'])) {
			$userN = $_POST['userN'];
			$pass = $_POST['loginPass'];


      // Connect to the database
      $connection = db_connect();

      $rows = db_select("SELECT fName,password,memberID FROM MEMBER WHERE username='".$userN."' ");
      if(($rows !== false)&&(count($rows) > 0)) {
        if($rows[0]['password'] == $pass){

					// is_auth is important here because we will test this to make sure they can view other pages
					// that are needing credentials.
					$_SESSION['is_auth'] = "true";
					$_SESSION['uId'] = $row[0]['memberID'];
					$_SESSION['name'] = $row[0]['fName'];

					// Once the sessions variables have been set, redirect them to the landing page / home page.
					header('location: home.php');
          exit;

				}
				else {
					$error = "Password compare issue";
				}
			}
			else {
				$error = "Database query issue ";
			}
		}
		else {
			$error = "Username and password not grabbed.";
		}
	}
?>
