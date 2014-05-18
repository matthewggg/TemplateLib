<?php
require('lib/Loader.php');
require('lib/Parsedown.php');
$Parsedown = new Parsedown();
$post_content = $Parsedown->text(file_get_contents("posts/".$_GET['post'].".md"));
$post_title = str_replace('-', ' ', $_GET['post']);
$templ = new Templates();
$templ->display('test.tpl', array(
	'post.title'=>$post_title,
	'post.content'=>$post_content,
	'blog.title'=>'My Blog'
), array());
?>
