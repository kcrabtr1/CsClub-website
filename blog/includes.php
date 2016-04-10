<?php
include 'better_blog.php';
 
$connection = mysql_connect('localhost', 'username', 'password') or die ("<p class='error'>Sorry, we were unable to connect to the database server.</p>");
$database = "nettuts_blog";
mysql_select_db($database, $connection) or die ("<p class='error'>Sorry, we were unable to connect to the database.</p>");
 
function GetBlogPosts($inblog_id=null, $inTagId =null)
{
    if (!empty($inId))
    {
        $query = mysql_query("SELECT * FROM blog_posts WHERE id = " . $inId . " ORDER BY id DESC"); 
    }
    else if (!empty($inTagId))
    {
        $query = mysql_query("SELECT blog_posts.* FROM blog_post_tags LEFT JOIN (blog_posts) ON (blog_post_tags.postID = blog_posts.id) WHERE blog_post_tags.tagID =" . $tagID . " ORDER BY blog_posts.id DESC");
    }
    else
    {
        $query = mysql_query("SELECT * FROM blog_posts ORDER BY id DESC");
    }
 
    $postArray = array();
    while ($row = mysql_fetch_assoc($query))
    {
        $myPost = new better_blog($row["blog_id"], $row['title'], $row['body'], $row['postfull'], $row["author_id"], $row['date_posted']);
        array_push($postArray, $myPost);
    }
    return $postArray;
}
?>