# Examples
Basic templating.

`
index.php

<?php
include 'lib/Loader.php';
$templ = new Templates();
$templ->display('index.tpl', array(
	'page.title'=>'This is my template',
	'page.content'=>'I made this page using TemplateLib!'
));
?>

index.tpl 

<html>
<head>
	<title>{{page.title}}</title>
</head>
<body>
	<h1>{{page.title}}</h1>
	<p>{{page.content}}</p>
</body>
</html>
`

Now load index.php in your web browser!
