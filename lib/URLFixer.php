<?php
if(isset($_GET['viewmagic'])) {
	$fc = file_get_contents(urldecode($_GET['viewmagic']));
	$fc = Common::ReplaceVariables($fc, unserialize(urldecode($_GET['datamagic'])));
	header("Content-Type: ".Common::ctype(urldecode($_GET['viewmagic'])));
	echo $fc;
	exit;
}
class URLFixer {
	public static function GetDisplayURL($url, $data) {
		$url = "http".(!empty($_SERVER['HTTPS'])?"s":"")."://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."?viewmagic=".urlencode($url)."&datamagic=".urlencode(serialize($data));
		return $url;
	}
}
?>