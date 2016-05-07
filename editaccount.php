<!DOCTYPE html>
<?php include 'db/accesscontrol.php'; ?>
<?php include 'edit-profile.php'; ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="js/validator-profile.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/custom.css">


  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="signedin.php">Home</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="Downloads.php">Downloads</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Hello <?=$fname?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="editaccount.php">Edit Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="db/logout.php">Logout</a></li>
          </ul>
        </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="row">
<div class="center-block col-xs-6" style="float: none;">
  <div class="page-header">
    <h1>Edit Profile<small>Make changes to your profile here</small></h1>
  </div>
  <div class="well">
    <form role="form" data-toggle="validator" method="POST" action="">
      <ul>
        <div class="input-group">
      <span class="input-group-addon" >First Name </span>
      <input type="text" class="form-control" name="fname" value="<?=$fname?>" aria-describedby="basic-addon1" data-minlength="3" required>
      <div class="help-block with-errors"></div>
    </div>
    <p>
    <div class="input-group">
      <span class="input-group-addon" >Last Name</span>
      <input type="text" class="form-control" name="lname" value="<?=$lname?>" aria-describedby="basic-addon1" data-minlength="3" required>
      <div class="help-block with-errors"></div>
    </div>
    <p>
    <div class="input-group">
      <span class="input-group-addon" >Username</span>
      <input type="text" class="form-control" name="uname" value="<?=$username?>" aria-describedby="basic-addon1" data-minlength="6" required>
      <div class="help-block with-errors"></div>
    </div>
    <p>
    <div class="input-group">
      <span class="input-group-addon" >Email</span>
      <input type="email" class="form-control" name="email" value="<?=$email?>" aria-describedby="basic-addon1" data-error="Invalid Email" required>
      <div class="help-block with-errors"></div>
    </div>
    <p>
    <div class="input-group">
      <span class="input-group-addon" >Phone</span>
      <input type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}$" class="form-control" name="phone" value="<?=$phone?>" placeholder="Must Use Format 888-888-8888" aria-describedby="basic-addon1" data-error="Invalid Phone Number Use Format 888-888-8888">
      <div class="help-block with-errors"></div>
    </div>
    <p>
    <div class="input-group">
      <span class="input-group-addon" >Password</span>
      <input type="password" class="form-control" id="Password" name="pass" placeholder="Must Enter Password to Change Profile" aria-describedby="basic-addon1" data-minlength="8" required>
      <div class="help-block with-errors"></div>
    </div>
    <p>
    <div class="input-group">
      <span class="input-group-addon" >Confirm Password</span>
      <input type="password" class="form-control" name="confPass" value="" aria-describedby="basic-addon1" data-match="#Password" data-error="Passwords Don't Match" required>
      <div class="help-block with-errors"></div>
    </div>
    <p>
    <p>
    <button type="submit" name="profileSubmit" class="btn btn-success">Save</button>

      </ul>
    </form>
  </div>
</div>
</div>


    <div class="container">

    </div><!-- /.container -->



  </body>
</html>
