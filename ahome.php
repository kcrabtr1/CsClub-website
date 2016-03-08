<!DOCTYPE html>
<?php include 'db/accesscontrol-admin.php'; ?>
<html>

  <!--Has all links and other incudes-->
  <?php include 'modules/head.php';?>

  <body class="layout-boxed hold-transition <?=$pageSkin?> sidebar-mini">
    <div class="wrapper">

      <!--HEADER AND MAIN NAV-->
      <?php include 'modules/header-nav.php'; ?>

      <!--LEFT MAIN SIDEBAR-->
      <?php include 'modules/main-sidebar.php' ?>

      <!--PAGE CONTENT-->
      <div class="content-wrapper">


      <!--CONTENT HEADER-->
      <?php include 'modules/content-header.php'; ?>
      <!--MAIN PAGE CONTENT-->
      <?php include $pageCont ?>

      </div>
      <!--END PAGE CONTENT-->

      <!--FOOTER-->
      <?php include 'modules/afooter.php'; ?>

      </div>

      <!--RIGHT SIDE BAR-->
      <?php include 'modules/right-sidebar.php'; ?>

      <!--REQUIRED SCRIPTS-->
      <?php include 'modules/javaReq.php'; ?>

  </body>
</html>
