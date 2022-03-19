<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Set Training | PHP Variables Scope </title>

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
            <h4>PHP Variables Scope (Global and Local)</h4>
            <hr>
        </div>

        <div class="col-sm-12 text-center">
            <?php

            $number1 = "555555555"; // global scope
            function myTest($number1) {
                // using $number1 inside this function will generate an error
                        echo "<p>Variable number1 inside function is: $number1</p>";
            }
            myTest($number1);
            echo "<p>Variable number1 outside function is: $number1</p>";

            function myTest2() {
                $x = 5000; // local scope
                echo "Variable x inside function is: ".$x;
            }

            myTest2();
            // using x outside the function will generate an error
            echo "<p>Variable x outside function is: $x</p>";

            ?>
        </div>


    </div>
</div>

</body>
</html>
