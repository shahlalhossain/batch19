<?php
$number1 = 100;
$number2 = 500;
$operator = "+";
// $operator = "-";
// $operator = "/";
// $operator = "*";

operation($number1, $number2, $operator);

function operation($number1, $number2, $operator) {

	if ($operator == "+") {
		$sum = $number1 + $number2;
		echo $sum;
	}

	if ($operator == "-") {
		$sub = $number1 - $number2;
		echo $sub;
	}

	if ($operator == "/") {
		$division = $number1 / $number2;
		echo $division;
	}

    if ($operator == "*") {
        $multiplication = $number1 * $number2;
        echo $multiplication;
    }
}

?>