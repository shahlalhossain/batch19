<!DOCTYPE html>
<html>
    <head>
        <title>Basic PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </head>


    <body class="text-center">

    <?php
        // PHP String
        $x = "Hello World!";
        $y = 'Hello Bangladesh!';
        echo ($x);
        echo "<br>";
        echo $y;
        echo "<br>";

        // Integer
        $a = 5985;
        var_dump($a);
        echo "<br>";

        // PHP Float
        $x = 10.365;
        var_dump($x);
        echo "<br>";

        // PHP Boolean
        $h = true;
        $p = false;
        var_dump($h);
        echo "<br>";
        var_dump($p);
        echo "<br>";

        // PHP Array
        $countries = array("Bangladesh","Japan","Canada","Thailand");
        $countries = [
            2 => 'Japan',
            3 => 105.55,
            4 => "Thailand",
            1 => "Bangladesh",
            5 => 25555,
            6 => true
        ];
        var_dump($countries);
        echo "<br>";
        echo "<br>";
        echo "<br>";

        
        // PHP Math
        echo (pi()); // returns 3.1415926535898
        echo "<br>";

        echo (min(0, 150, 30, 20, -8, -200)); // returns -200
        echo "<br>";

        echo (max(0, 150, 30, 20, -8, -200)); // returns 150
        echo "<br>";
         
        echo (abs(-6.7)); // returns 6.7
        echo "<br>";

        echo (sqrt(64)); // returns 8
        echo "<br>";

        echo (round(0.60)); // returns 1
        echo "<br>";

        echo (round(0.49)); // returns 0
        echo "<br>";

        echo (rand());
        echo "<br>";

        echo (rand(100000, 999999));
        echo "<br>";


        // PHP Constant
        // Syntax
        // define(name, value)
        define("greetings", "Welcome to SET Training Program");
        echo greetings;
    ?>
    
    </body>
</html>