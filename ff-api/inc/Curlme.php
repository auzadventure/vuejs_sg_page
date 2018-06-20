<?php
/* An Easy Curl Class That creates standard pulls */
class Curlme {
	
	public $base; 
	
	function __construct() {
		$this->base = '';
	}
	
	function setBase($base) {
		$this->base = $base;
	}
	
	function get($url,$params = '') {
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$this->base.$url);
		
		if($params !=='') {
			$query = http_build_query($params);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$query );
		}
		
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec ($ch);
		curl_close ($ch);
		return $output;
	}

	function post($url,$params = '') {
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$this->base.$url);
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		if($params !=='') {
			$query = http_build_query($params);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$query );
		}
		$output = curl_exec ($ch);
		curl_close ($ch);
		return $output;
	}
	
	

	
}

?>