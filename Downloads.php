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
    <title>Home</title>

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
            <li><a href="about.php">About</a></li>
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
            <h1 class="featurette-heading">Welcome to the Downloads section!</h1>
            <p class="lead">Downloads Available:</p>
            <?php
            $rows = db_select("SELECT resourceID, title, description, url FROM resources");
            if(($rows !== false)&&(count($rows) > 0)) {
              foreach ($rows as $row){
               //Format Accordingly
               echo "<div class='row'>";
               echo "<div class='col-md-1 pull-left'>";
               echo "<a href='?page=resources&rID=".$row['resourceID']."&action=delete'><h4><i class='fa fa-times fa-2x text-danger'></i></h4></a>";
               echo "</div>";
               echo "<div class='col-md-8 pull-left'>";
               echo "<a href='".$row['url']."' target='_blank'>";
               echo "<h4>".$row['title']."<br>";
               echo "<small>".$row['description']."</small>";
               echo "</h4></a>";
               echo "</div>";
               echo "</div>";
             }
            }
             ?>
        </div>

        <hr class="featurette-divider">

        <!-- Second Featurette
        <div class="featurette" id="services">
            <h2 class="featurette-heading">MORE CONTENT
                <span class="text-muted">MEMBERS STUFF.</span></h2>
            <p class="lead">THIS IS WHERE CONTENT FOR MEMBERS IS.</p>
        </div>
        <hr class="featurette-divider">


        <div class="featurette" id="contact">
            <h2 class="featurette-heading">EVEN MORE MEMBERS CONTENT
                <span class="text-muted">THIS IS ADDITIONAL CONTENT SPACE.</span></h2>
            <p class="lead">MORE CONTENT FOR MEMBERS.</p>
        </div>
        <hr class="featurette-divider">
-->


    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
