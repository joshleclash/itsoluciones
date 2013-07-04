<?php
include_once('config/config.php');
class Controller{
	public function render($view,$params=null){
	/*foreach($params as $k => $v):
		$dinamica="$k";	
		$$dinamica=$v;
	endforeach;*/
		include_once('views/'.$view.'.php');
		//	curl_init();
	}
}
?>