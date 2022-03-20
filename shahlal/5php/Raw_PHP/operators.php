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

            // $x = 200;
            // $y = 300;
            // echo "X = ".$x; echo "<br>"; echo "Y = ".$y;

            // echo "<br>";
            // $x = $y;
            // echo "X = ".$x;

            // echo "<br>";
            // $x += $y;
            // echo "X += Y = ".$x;

            // echo "<br>";
            // $x *= $y;
            // echo "X *= Y = ".$x;

            // echo "<br>";
            // $x -= $y;
            // echo "X *= Y = ".$x;

            // echo "<br>";
            // $x /= $y;
            // echo "X *= Y = ".$x;



            // $m = 500;
            // $n = 500;
            //
            // if ($m == $n) {
            //     echo "TRUE";
            // } else {
            //     echo "FALSE";
            // }

            // $m = "500";
            // $n = 500;
            // if ($m === $n) {
            //     echo "TRUE";
            // } else {
            //     echo "FALSE";
            // }

            // $m = 501;
            // $n = 500;
            // if ($m != $n) {
            //     echo "FALSE";
            // } elseif ($m == $n) {
            //     echo "TRUE";
            // } else {
            //     echo "Nothing";
            // }


            // $m = 500;
            // $n = 500.00;
            // if ($m !== $n) {
            //     echo "FALSE";
            // } else {
            //     echo "TRUE";
            // }


            // $a = NULL;
            // $b = 6666;
            //
            // if (!$a) {
            //     echo "TRUE";
            // } else {
            //     echo "FALSE";
            // }


            // $x = isset($a) ? $a : $b;
            // echo $x;


            $favcolor = "black";
            switch ($favcolor) {
                case "red":
                    echo "Your favorite color is red!";
                    break;
                case "blue":
                    echo "Your favorite color is blue!";
                    break;
                case "green":
                    echo "Your favorite color is green!";
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }


            ?>
        </div>


    </div>
</div>

</body>
</html>
