<?php
//Small notification on top nav bar of admin home page
$link = "#";
$class = "fa fa-users text-aqua";
$info = "2 new members joined today";

echo '
<li>
  <a href="'.$link.'">
    <i class="'.$class.'"></i> '.$info.'
  </a>
</li>
';
 ?>
