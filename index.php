<!DOCTYPE HTML>
<head></head>
<body>

<h1>Take a Quiz</h1>

<?php 
	$isPost = False;
	if( ! isset($_POST["submit"]) ){
		
?>

	<form action = "index.php" method = "post">
	Number of items: <input type = "text" name = "items"></br>
	<input type="reset" name = "reset">
	<input type="submit" name = "submit" value = "Go"></br>
	</form>

<?php
	}
	else{
		showArray($_POST["items"]);
		}
?>

<?php
function showArray($a){
		//$n = $a
		$c = 1;
		$q = array();
		$index = array_fill(0, $a, 1);
		foreach($index as $i){
			$q[$c] = $c;
			$c = $c + 1;
			//echo "</br>";			
		}
		?>
		<form action = "grade.php" method = "post">
		<?php
		$min= 10;
		$max=20;
		foreach($q as $i){
			echo $i . ") ";
			makeAdditionProblem($min, $max, $i);
			echo "</br>";			
		}//end of foreach, $q
		?>
		<input type="reset" name = "reset" value = "Start Over">
		<input type="submit" name = "submit" value = "Grade me!"></br>
		</form>
		<?php
}//end of showArray


function makeAdditionProblem($min, $max, $i){
	
	$x = rand($min, $max);
			$y = rand($min, $max);
			$sum = $x + $y;
			echo $x . " + " . $y . " = ";
			$name = "result" . $i;
			$xname = "x" . $i;
			$yname = "y" . $i;
			$sumname = "sum" . $i;
			?>
			<input type = "text" name = <?php echo $name?>>
			<input type = "hidden" name = <?php echo $sumname?> value = <?php echo $sum?>>
			<?php
	
	
}

?>

</body>