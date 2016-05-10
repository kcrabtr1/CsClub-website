<!DOCTYPE html>
<html lang="en">

<head>

                          <style>
                          body{

                            background: radiel-gradient(circle,green,gold);
                          }
                          </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Computer Science Club</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap/css/one-page-wonder.css" rel="stylesheet">

    <!-- class Schedule CSS -->



</head>

<body>

  <!--Header and nav bar-->
  <?php

  include('header-nav-public.php');
  ?>

    <!-- Page Content -->
    <div class="container">

        <hr class="featurette-divider">



        <hr class="featurette-divider">

        <!-- First Featurette -->
        <div class="featurette">
            <img class="featurette-image img-circle img-responsive pull-right" src="img/joinus.jpg" height="500px" width="500px">
            <h1 class="featurette-heading">New to the Computer Science Club?
                <p><a class="btn btn-primary btn-lg" href="register.php" role="button">Join Us Now!</a>
            </h1>
            <p class="lead">Creating and account with us will allow you to:</p>
            <h4><p><ul style="list-style-type:disc">
                <li>Login to our club computers</li>
                <li>Access club files and resources</li>
                <li>Sign in to the club room</li>
                <li>Webspace for your member website</li>
                <li>And much more!</li>
              </ul></p></h4>
        </div>

  

<style>
  body{
    background: radial-gradient(green,yellow);
  }
</style>



                                    <?php
                                    //NEWSFEED CODE! MODIFY AS NEEDED!
                                    include_once 'db/dbcore.php';

                                    $rows = db_select("SELECT postAuthor, postBody, postTime FROM newsfeed");
                                    if(($rows !== false)&&(count($rows) > 0)) {
                                      foreach ($rows as $row){
                                       $bodyCode = html_entity_decode($row['postBody']);
                                       $bodyCode = preg_replace('/(^[\"\']|[\"\']$)/', '', $bodyCode);
                                       $formatedTime = substr($row['postTime'], 0, 10);

                                       //Format Accordingly
                                       echo "<blockquote>";
                                       echo "<p>$bodyCode</p>";
                                       echo "<footer>Post by: ".$row['postAuthor']." <cite title='Source Title'>On $formatedTime </cite></footer>";
                                       echo "</blockquote>";
                                     }
                                    }
                                    ?>

                                  </tr>
                                </table>

                              </td>
                            </table>
                          </tr>
                        </table>



                      <!-- container end below -->
                      </td>
                    </tr>
                  </table>

                </center>
              </td>
            </tr>
          </table>
        </body>
        </html>
        <!--Footer-->
        <?php
        include('footer.php');
        ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
