<?php
 
class BlogPost
{
 
public $blog_id;
public $title;
public $body;
public $author_id;
public $tags;
public $date_posted;
 
function __construct($inblog_id=null, $intitle=null, $inbody=null, $inPostFull=null, $inauthor_id=null, $indate_posted=null)
{
    if (!empty($inblog_id))
    {
        $this->blog_id = $inblog_id;
    }
    if (!empty($intitle))
    {
        $this->title = $inTitle;
    }
    if (!empty($inbody))
    {
        $this->body = $inPost;
    }
 
    if (!empty($indate_posted))
    {
        $splitDate = explode("-", $inDatePosted);
        $this->datePosted = $splitDate[1] . "/" . $splitDate[2] . "/" . $splitDate[0];
    }
 
    if (!empty($inauthor_id))
    {
        $query = mysql_query("SELECT first_name, last_name FROM people WHERE id = " . $inAuthorId);
        $row = mysql_fetch_assoc($query);
        $this->author = $row["first_name"] . " " . $row["last_name"];
    }
 
    $postTags = "No Tags";
    if (!empty($inblog_id))
    {
        $query = mysql_query("SELECT tags.* FROM blog_post_tags LEFT JOIN (tags) ON (blog_post_tags.tag_id = tags.id) WHERE blog_post_tags.blog_post_id = " . $inId);
        $tagArray = array();
        $tagIDArray = array();
        while($row = mysql_fetch_assoc($query))
        {
            array_push($tagArray, $row["name"]);
            array_push($tagIDArray, $row["id"]);
        }
        if (sizeof($tagArray) > 0)
        {
            foreach ($tagArray as $tag)
            {
                if ($postTags == "No Tags")
                {
                    $postTags = $tag;
                }
                else
                {
                    $postTags = $postTags . ", " . $tag;
                }
            }
        }
    }
    $this->tags = $postTags;
}
 
}
 
?>