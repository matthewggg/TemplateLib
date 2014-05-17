<?php
class Templates {
  public function display($template, $data) {
    $fc = file_get_contents($template);
    $fc = $this->replaces($fc, $data);
	echo $fc;
    return true;
  }
  public function html($template, $data) {
    $fc = file_get_contents($template);
    $fc = $this->replaces($fc, $data);
	return $fc;
  }
  private function replaces($fc, $data) {
	$return = $fc;
	$d = array_keys($data);
	for($i = 0; $i < count($d); $i++) {
		$d[$i] = "{{".(array_keys($data)[$i])."}}";
	}
	$return = str_replace($d, array_values($data), $return);
	return $return;
  }
}
?>