<?php 
//print_r($_POST);
//echo $_POST["result"];
$x2 = 0;
$y2 = 0;
$sum2 = 0;
$result2 = 0;
$keys = array_keys($_POST);

$score = 0;
$outof = 0;
foreach($keys as $k){
	//echo "</br>";
	if (startsWith($k, "result")){
		$result2 = $_POST[$k];
		//echo "result: " . $x2;
	}
	if (startsWith($k, "sum")){
		$sum2 = $_POST[$k];
		//echo "sum: " . $sum2;
	if($sum2 == $result2){		
		$score = $score  + 1;
	}

	$outof = $outof  + 1;
	}
	
	
}
echo "Your score is " . $score . " out of " . $outof;


function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}

function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
}

?>


