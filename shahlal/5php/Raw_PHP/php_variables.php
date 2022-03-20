<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>

    </style>
</head>
<body>

<br><br><br>

<div class="container text-center">

    <?php
    $x = 555; // Global Scope

    function myTest1() {
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
    }


    myTest1();

    echo "<p>Variable x outside function is: $x</p>";



    function myTest2($x) {
        $y = 557; // local scope
        echo "<p>Variable y inside function is: $y</p>";
    }

    myTest2($x);


    // using x outside the function will generate an error
    echo "<p>Variable y outside function is: $y</p>";

    ?>



</body>
</html>