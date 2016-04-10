<?php
session_start();
if(!isset($_SESSION['user_id']){
	header('Location: login.php');
    exit();
}
include('../includes/db_connects.php');
//post count
$post_count= $db->query("SELECT * FROM posts");
//comment_count
$comment_count = $db->query("SELECT * FROM comments");
?>
<!Doctype html>
 <html  lang="en">
 <head>
 <meta charset= "utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=9" />
 <style>
 body {

 }
 #container{
	 padding:10px;
	 width:800px;
	 margin: auto;
	 background:white;
 }
 #menu{
	 height:40px;
	 line-height:40px;
 }
 #menu ul{
	 margin:0;
	 padding:0;
 }
 #menu ul li{
	 display:inline;
	 list-style:none;
	 margin-right:10px;
	 font-size:18px;
 }
 #mainContent{
	 clear:both;
	 margin-top:5px;
	 font-size:25px;
 }
 #header{
	 height:80px;
	 line-height:80px
 }
 #container #header h1{
	 font-size: 45px;
	 margin:0;
 }
 </style>
 </head>
 <body>
     <div id="container">
		<div id="menu">
			<u1>
				<li><a href="#">Home</a></li>
				<li><a href="new_post.php">Create a new post</a></li>
				<li><a href="#">delete a post</a></li>
				<li><a href="#">Blog home page </a></li>
			</ul>
		</div>
		<div id="mainContent">
			<table>
				<tr>
					<td>Total Blog Post</td>
					<td><?php echo $post_count->num_rows?></td>
				</tr>
				<tr>
					<td>Total Comments</td>
					<td><?php echo $comment_count->num_rows?>
				</tr>
			</td>
	</div>
