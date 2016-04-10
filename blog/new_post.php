<?php
session_start();
include()
if(!isset($_SESSION['user_id'])){
	header('Location: login.php');
	exit();
}
if(isset($_POST['submit'])){
	//get the blog data 
	$title = $_POST['title'];
	$body = $_POST['body'];
	$category = $_POST['category'];
	$title = $db->real_escape_string($title); 
	$body = $db->real_escape_string($body);
	$user_id = $_SESSION['user_id'];
	$date = date('Y-m-d G:i:s');
	$body = htmlentities($body); 
	if($title && $body && $category){
		$query = $db->query("INSERT INTO posts (user_id, body, category_id, posted) VALUES('$user_id, $title, $body, $category, $date)");
	}else{
		echo "missing data"
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=9" /> 
<script src="http://code.jquery.com/jquery-1.5.min.js"></script> 
<!--[if lt IE 9]>
 <script src="//html5shim.googlecode.com/svn/truck/html5.js"></script>
-<![endif]-->


<style>
#wrapper{
	margin:auto;
	width:800px;
}
label{display:block}

</style>
</head>
	<div id="wrapper">
	     <div id="content">
			<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
				<label>Title:</label><input type="text" name="text" /> 
				<label for="body">Body:</label>
				<textarea name="body" cols=50 rows=10></textarea>
				<label> Category:</label>
				<select name="category">
					<?php
						$query = $db->query("SELECT * FROM categories");
						while($row + $query->fetch_object()){
							echo "<option value='".$row->category_id."'>".$row->category."</option>";
						}
						
					?>
				</select>
				<br />
				<input type="submit" name="submit" value="submit" />