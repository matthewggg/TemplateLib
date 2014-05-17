<?php
include 'lib/Loader.php';
$templ = new Templates();
$templ->display('test.tpl', array(
	'page.title'=>'T\'is the title.',
	'page.content'=>'T\'is the content.'
));
?>
