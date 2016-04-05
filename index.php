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
		//showAdditionArray($_POST["items"]);
	//	echo "</br>";echo "</br>";
		showSubtractionArray($_POST["items"]);
	}
?>

<?php function makeArray($n){
	$c = 1;
	$q = array();
	$index = array_fill(0, $n, 1);
	foreach($index as $i){
		//$q[$c] = $c;
		$q[] = $c;
		$c = $c + 1;
		//echo $c . " ";
	}
	return $q;
}?>


<?php
function showAdditionArray($a){
		$c = 1;
		$q = makeArray($a);
		?>
		<form action = "grade.php" method = "post">
		<h2>Addition</h2>
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
		<input type = "hidden" name = "problemtype" value = "addition">
		</form>
		<?php
}//end of showAdditionArray
?>

<?php
function makeAdditionProblem($min, $max, $i){
	
	$x = rand($min, $max);
			$y = rand($min, $max);
			$res = $x + $y;
			echo $x . " + " . $y . " = ";
			$name = "result" . $i;
			$xname = "x" . $i;
			$yname = "y" . $i;
			$resname = "res" . $i;
			?>
			<input type = "text" name = <?php echo $name?>>
			<input type = "hidden" name = <?php echo $resname?> value = <?php echo $res?>>
			<?php
	
	
}//end of makeAdditionProblem

?>
<?php
function showSubtractionArray($a){
	$c = 1;
	echo "<h2>Subtraction</h2>";
	$q = makeArray($a);
	?>
	<form action = "grade.php" method = "post">
<?php
	$min= 10;
	$max=20;
	foreach($q as $i){
		echo $i . ") ";
		makeSubtractionProblem($min, $max, $i);
		echo "</br>";			
	}//end of foreach, $q
?>
	<input type="reset" name = "reset" value = "Start Over">
	<input type="submit" name = "submit" value = "Grade me!"></br>
	<input type = "hidden" name = "problemtype" value = "subtraction">
	</form>
<?php
}//end of showSubtractionArray
?>

<?php
function makeSubtractionProblem($min, $max, $i){
	
	$x = rand($min, $max);
	$y = rand($min, $max);
	$res = $x - $y;
	echo $x . " - " . $y . " = ";
	$name = "result" . $i;
	$xname = "x" . $i;
	$yname = "y" . $i;
	$resname = "res" . $i;
?>
	<input type = "text" name = <?php echo $name?>>
	<input type = "hidden" name = <?php echo $resname?> value = <?php echo $res?>>

<?php
}//end of function makeSubtractionProblem($min, $max, $i)
?>


</body>