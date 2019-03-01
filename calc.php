<?php
session_start();
if(isset($_POST["answer"])){
	if($_POST["answer"] == $total){
		echo "Success";
	} else {
		echo "Failure";
	}
} else {
function getOperator() {
	$rando = rand(0,3);
	switch ($rando){
		case 0:
			$operator = "+";
			break;
		case 1:
			$operator = "-";
			break;
		case 2:
			$operator = "/";
			break;
		case 3:
			$operator = "*";
			break;
		default:
			$operator = "ERROR";
			break;
	}
	return $operator;
}
$max = 10000;
$min = 1000;

$num1 = rand($min,$max);
$num2 = rand($min,$max);
$num3 = rand($min,$max);
$num4 = rand($min,$max);
$op1 = getOperator();
$op2 = getOperator();
$op3 = getOperator();
$operation = "$num1 $op1 $num2 $op2 $num3 $op3 $num4";
$total = floor(eval("return ($operation);"));

echo '<html>
	<head>
	</head>
	<body>
		<div class="container">
			you have 1 second to type the answer to the following problem, good luck! if only there was a better way...
			<br>
			<br>
			<expression>';
				echo "$num1";
				echo "<br>";
				echo "$op1";
				echo "<br>";
				echo "$num2";
				echo "<br>";
				echo "$op2";
				echo "<br>";
				echo "$num3";
				echo "<br>";
				echo "$op3";
				echo "<br>";
				echo "$num4";
			echo '</expression>
		<form action="calc.php" method="POST">
			<br>
			answer (hint: the solution is floor()\'d):
			<input type="text" name="answer" class="input" value>
			<br>
		</form>
		</div>
	</body>
</html>';
}
?>
