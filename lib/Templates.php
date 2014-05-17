<?php
class Templates {
  public function display($template, $data, $include) {
    $fc = file_get_contents($template);
    $fc = Common::ReplaceVariables($fc, $data);
	foreach($include as $inc) {
		$fc = str_replace($inc, URLFixer::GetDisplayURL($inc, $data), $fc);
	}
	echo $fc;
    return true;
  }
  public function html($template, $data, $include) {
    $fc = file_get_contents($template);
    $fc = Common::ReplacesVariables($fc, $data);
	foreach($include as $inc) {
		$fc = str_replace($inc, URLFixer::GetDisplayURL($inc, $data), $fc);
	}
	return $fc;
  }
}
?>