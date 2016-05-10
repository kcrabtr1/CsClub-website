<?php include 'db/accesscontrol.php' ?>
<?php include 'edit-profile.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet"  href="css/custom.css">
    <title>About=</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
            <li><a href="contact.php">Contact</a></li>
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?=$pic?>" class="img-circle" width="25" height="25"> Hello <?=$fname?> <span class="caret"></span></a>
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

    <div class="container">

        <hr class="featurette-divider">

        <!-- First Featurette -->
        <div class="featurette">
            <h1 class="featurette-heading">About the Computer Science Club</h1>
            <p class="lead">We're here for you!</p>
            <h4><p><ul style="list-style-type:disc">
                <li>The computer Science club is a place where you can hangout and meet other people within the CS or computer info majors.</li>
                <li>In the computer Science Club, which is located in the basement of the Edgerly building in the far corner. Just come on in, sign in and make yourself at home.</li>
                <li>Everyone within the computer science club is friendly and willing to answer any questions you have or help you with any problems you may have.</li>
                <p></p>
                <img src = "img/computer-science-club.jpg">
              </ul></p></h4>
        </div>

        <hr class="featurette-divider">


    <div class="container">

    </div><!-- /.container -->

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
