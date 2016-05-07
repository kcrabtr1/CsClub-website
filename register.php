<!--Form submition handling-->
<?php
  //Check if form has been submitted
  if(!isset($_POST['formSubmit'])){
  }
  else{
    include_once 'db/dbcore.php';
    // Connect to the database
    $connection = db_connect();
    // Quote and escape form submitted values
    $fname = db_quote($_POST['fName']);
    $lname = db_quote($_POST['lName']);
    $email = db_quote($_POST['Email']);
    $phone = db_quote($_POST['Phone']);
    $user = db_quote($_POST['Username']);
    $pass = db_quote($_POST['Password']);
    // Insert the values into the database
    $result = db_query("INSERT INTO MEMBER (fName,lName,email,phone,username,password) VALUES (" . $fname . "," . $lname . "," . $email . "," . $phone . "," . $user . "," . $pass . ")");
    if($result === false) {
      // $error = db_error();
      // Handle failure - log the error, notify administrator, etc.
    } else {
    // We successfully inserted a row into the database
    }
  }
  ?>

<!DOCTYPE>
<html>
<head>
  <!--Form Post Handling-->
    <meta charset="utf-8" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link href="bootstrap/css/one-page-wonder.css" rel="stylesheet">

    <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="js/validator.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

  <!--Header and nav bar-->
  <?php
  include('header-nav-public.php');
  ?>

<div class="container">
  <div class="page-header">
    <h1>Registration form <small>A Bootstrap template showing a registration form with standard fields</small></h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row well col-md-4">
        <form role="form" data-toggle="validator" method="post" action="<?php $_SESSION['logout'] = true?>" >
          <div class="form-group">
              <!-- First Name -->
              <label class="control-label" for="fName">First Name</label>
              <div class="controls">
                  <input type="text" id="fName" name="fName" placeholder="First Name" class="input-xlarge" required>
                  <div class="help-block with-errors"></div>
              </div>
          </div>

          <div class="form-group">
              <!-- Last Name -->
              <label class="control-label" for="lName">Last Name</label>
              <div class="controls">
                  <input type="text" id="lName" name="lName" placeholder="Last Name" class="input-xlarge" required>
                  <div class="help-block with-errors"></div>
              </div>
          </div>

          <div class="form-group">
              <!-- E-mail -->
              <label class="control-label" for="Email">E-mail</label>
              <div class="controls">
                  <input type="email" id="Email" name="Email" placeholder="Enter Email" class="input-xlarge" data-error="Invalid Email" required>
                  <div class="help-block with-errors"></div>
              </div>
          </div>

          <div class="form-group">
              <!-- Phone -->
              <label class="control-label" for="Phone">Phone Number</label>
              <div class="controls">
                  <input type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}$" id="Phone" name="Phone" placeholder="Phone #" class="input-xlarge" data-error="Invalid Phone Number">
                  <p class="help-block">Must Use Format 888-888-8888</p>
                  <div class="help-block with-errors"></div>
              </div>
          </div>

          <div class="form-group">
              <!-- Username -->
              <label class="control-label" for="username">Username</label>
              <div class="controls">
                  <input type="text" id="username" placeholder="Username" name="Username" class="input-xlarge" data-minlength="6" required>
                  <div class="help-block with-errors"></div>
              </div>
          </div>

          <div class="form-group">
              <!-- Password-->
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                  <input type="password" id="Password" name="Password" placeholder="Password" class="input-xlarge" data-minlength="8" required>
                  <p class="help-block">Password should be at least 8 characters</p>
                  <div class="help-block with-errors"></div>
              </div>
          </div>

          <div class="form-group">
              <!--Confirm  Password -->
              <label class="control-label" for="passwordConfirm">Password (Confirm)</label>
              <div class="controls">
                  <input type="password" id="passwordConfirm" placeholder="Confirm" class="input-xlarge" data-match="#Password" data-error="Passwords Don't Match" required>
                  <div class="help-block with-errors"></div>
              </div>
          </div>

          <div class="form-group">
              <!-- Button -->
              <div class="controls">
                  <button type="submit" name="formSubmit" class="btn btn-success">Register</button>
              </div>
          </div>
  </form>


    </div>
</div>
<!-- Registration form - END -->

<hr class="featurette-divider">
<!--Footer-->
<?php
include('footer.php');
?>
</div>



</body>
</html>
