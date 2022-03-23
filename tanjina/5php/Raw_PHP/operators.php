<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Set Training | PHP Operators </title>

    <!-- Bootstrap as External CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <!-- Internal CSS -->
    <style>

    </style>
</head>

<body>

<br><br>
<div class="container pt-3">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4>PHP Operators</h4>
            <hr>
        </div>

        <div class="col-sm-12 text-center">
            <?php
            echo "PHP Assignment Operators";
            $x = 200;
            $y = 300;
            echo "X = ".$x; echo "<br>"; echo "Y = ".$y;

            echo "<br>";
            $x = $y;
            echo "X = ".$x;

            echo "<br>";
            $x += $y;
            echo "X += Y = ".$x;

            echo "<br>";
            $x *= $y;
            echo "X *= Y = ".$x;

            echo "<br>";
            $x -= $y;
            echo "X *= Y = ".$x;

            echo "<br>";
            $x /= $y;
            echo "X *= Y = ".$x;
            echo "<br>";
            $m = 600;
            $n = 500;
            
            if ($m == $n) {
                echo "TRUE";
            } else {
                echo "FALSE";
            }
            echo "<br>";
            $number1 = 500;
            $number2 = 500;
            
            if ($number1 == $number2) {
                echo "Do you something";
            } else {
                echo "Do you nothing";
            }
            echo "<br>";
            $number1 = "500";
            $number2= "500";
            if ($number1 === $number2) {
                echo "Number is TRUE";
            } else {
                echo "Number is FALSE";
            }
            echo "<br>";
            $m = 501;
            $n = 500;
            if ($m != $n) {
                echo "FALSE";
            } elseif ($m == $n) {
                echo "TRUE";
            } else {
                echo "Nothing";
            }

            echo "<br>";
            $m = 500;
            $n = 500.00;
            if ($m !== $n) {
                echo "FALSE";
            } else {
                echo "TRUE";
            }

            echo "<br>";
            $a = NULL;
            $b = 6666;
            
            if (!$a) {
                echo "TRUE";
            } else {
                echo "FALSE";
            }


            $x = isset($a) ? $a : $b;
            echo $x;
            echo "<br>";
            $x = 5;
            $x **= 5;
            echo $x;
            echo "<br>";
            $num = 60;
            if($num >= 80){
                echo "Result A+";
            }elseif ($num >= 60){
                echo "Result A";
            }else{
                echo "Result Failed";
            }
            echo "<br>";
            $t = 10;
            // Only IF
            if ($t < "20") {
            echo "Have a good day!";
            }
            // IF..ELSE
            if ($t < "20") {
            echo "Have a good day!";
            } else {
            echo "Have a good night!";
            }
            // IF..ELSEIF..ELSE
            if ($t < "10") {
            echo "Have a good morning!";
            } elseif ($t < "20") {
            echo "Have a good day!";
            } else {
            echo "Have a good night!";
            }

            // $favcolor = "black";
            // switch ($favcolor) {
            //     case "red":
            //         echo "Your favorite color is red!";
            //         break;
            //     case "blue":
            //         echo "Your favorite color is blue!";
            //         break;
            //     case "green":
            //         echo "Your favorite color is green!";
            //         break;
            //     default:
            //         echo "Your favorite color is neither red, blue, nor green!";
            // }


            ?>
        </div>


    </div>
</div>

</body>
</html>
