<?php
//connect to the database 
include("includes/db_connect.php");
// get record of database
$record_count = $db->query("SELECT * FROM posts");
//amount displayed 
$per_page = 2; 
//number of pages 
$pages = ceil($record_count->num_rows/$per_page);
//get page number 
if(isset($_GET['p']) && is_numeric($_GET['p'])){
	$page = $_GET['p'];
	
}else{
	$page = 1;
}
if($page<=0)
	$start = 0;
else
	$start = $page * $per_page = $per_page;
$prev = $page - 1;
$next = $page + 1;
	
$query = $db-> prepare("SELECT post_id, title,LEFT (body, 300) AS body, category FROM posts INNER JOIN categories ON categories.category_id order by 
post_id desc limit $");
$query=>execute();
$query->bind_result($post_id, $title, $body, $category);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=9" /> 
<!--[if lt IE 9]>
 <script src="//html5shim.googlecode.com/svn/truck/html5.js"></script>
-<![endif]-->
<script src="http://code.jquery.com/jquery-1.5.min.js"></script> 
</head>
<style>
#container{
	margin:auto;
	width:800px;
</style>
<body>

<div id="container">
	<?php
		while($query->fetch());
		$lastspace = strrpos($body, ' '); 
	?>
	<article>
	<h2><?php echo $title?></h2>
	<p><?php echo substr($body, 0, $lastspace)."<a href='post.php?id=$post_id'>..</a"?></p>
	<p>Category: <?php echo $category?>   
	   </article>
	<?php endwhile?>

	<?php
		if($prev > 0 ) {
			echo "<a href='index.php?p=$prev'>Prev</a>";
		}
		if ($page < $pages){
			 echo "<a href='index.php?p=$next'>Next</a>" 
		}
			 
			
		
	?>
	
</div>
</body>
</html>
