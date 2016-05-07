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

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

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
            <li><a href="#contact">Contact</a></li>
            <li><div class="btn-group">
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Hello <?=$fname?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="editaccount.php">Edit Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="db/logout.php">Logout</a></li>
              </ul>
            </div>
          </li>
          </li>
          </ul>
          <ul class="navbar-right">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

        <hr class="featurette-divider">

        <!-- First Featurette -->
        <div class="featurette">
            <h1 class="featurette-heading">Welcome back!</h1>
            <p class="lead">News Feed:</p>
            <h4><p><ul style="list-style-type:disc">
                <li>News Feed GOES HERE</li>
                <li>News Feed GOES HERE</li>
                <li>News Feed GOES HERE</li>
                <li>News Feed GOES HERE</li>
                <li>News Feed GOES HERE</li>
              </ul></p></h4>
        </div>

        <hr class="featurette-divider">

        <!-- Second Featurette -->
        <!--
        <div class="featurette" id="services">
            <h2 class="featurette-heading">On going projects
                <span class="text-muted">MEMBERS STUFF.</span></h2>
            <p class="lead">THIS IS WHERE CONTENT FOR MEMBERS IS.</p>
        </div>
        <hr class="featurette-divider">
-->

        <!-- Third Featurette -->
        <!--
        <div class="featurette" id="contact">
            <h2 class="featurette-heading">EVEN MORE MEMBERS CONTENT
                <span class="text-muted">THIS IS ADDITIONAL CONTENT SPACE.</span></h2>
            <p class="lead">MORE CONTENT FOR MEMBERS.</p>
        </div>
      -->
        <hr class="featurette-divider">

        

    </div><!-- /.container -->

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
