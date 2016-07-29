<?php
	$outp = "{";
	session_start();
	if(!isset($_SESSION['userdata'])){
		$result = array();
		$result['info'] = 'You Must Login First';
		$_SESSION['userdata'] = $result;
	} else {
		$result = $_SESSION['userdata'];
		foreach($result as $key => $r) {
			$outp .= '"'.$key.'":"'.$r.'"';
			$outp .= ($key == "info") ? "" : ",";
		}
		$outp = '{"records":['.$outp.'}]}';
	}
	echo($outp);
?>