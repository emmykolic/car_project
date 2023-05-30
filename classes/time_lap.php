<?php 

trait time_lap{
	public function timelap($param){
		$param = time() - $param;
		if (abs($param) >= 31536000) {
			$results = floor($param / 31536000)."years";
		}elseif (abs($param) >= 2592000) {
			$results = floor($param / 2592000)."months";
		}elseif (abs($param) >= 604800) {
			$results = floor($param / 604800)."weeks";
		}elseif (abs($param) >= 86400) {
			$results = floor($param / 86400)."days";
		}elseif (abs($param) >= 3600) {
			$results = floor($param / 3600)."hours";
		}elseif(abs($param) >= 60){
			$results = floor($param / 60)."minutes";
		}else{
			$results = $param."seconds";
		}
		echo $results."<br>";
		echo time()."<br>";
	}
}

 ?>