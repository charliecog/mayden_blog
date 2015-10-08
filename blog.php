<?php

$id= $_GET["id"];
include 'config.php';
$title = $row['title'];
$date = $row['date_published'];
$content = $row['content'];

include '_includes/blogpage.inc';
?>
