<?php
  if (isset($_GET['action']) && $_GET['action']=='delete'){
    $result = db_query("TRUNCATE notify");
    if($result === false) {
      $error = db_error();
    }else{
      //Yay it worked tell the user
      alertMsg('Notifications Cleared Successfully!', 'alert-success');
      echo "<script>window.location.replace('ahome.php?page=dashboard');</script>";
  }
  }
 ?>

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
  <div class="page-header">
    <h1><i class="fa fa-bell-o"></i>Notifications <small> A log of all notifications</small></h1>
  </div>
</div>
</div>
<hr style=" border: 0; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));" />
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
  <a class="btn btn-danger" href="?page=notifications&action=delete" role="button"><i class="fa fa-times"></i> Clear All Notifications</button></a>
  <ul class="list-group">
  <?php
  $rows = db_select("SELECT notifyCont FROM notify ORDER BY notifyID DESC");
  if(($rows !== false)&&(count($rows) > 0)) {
    foreach ($rows as $row){
     $notifyCode = html_entity_decode($row['notifyCont']);
     $nofifyCode = preg_replace('/(^[\"\']|[\"\']$)/', '', $notifyCode);
     //Format Accordingly
     echo "<li class='list-group-item'>";
     echo "$notifyCode";
     echo "</li>";
   }
  }?>
</ul>
</div>
</div>
