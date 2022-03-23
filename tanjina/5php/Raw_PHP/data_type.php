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
        var_dump($x);
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
        $countries = array("Bangladesh","Japan","Canada","Thailand","USA");
        $countries = [
            2 => 'Japan',
            3 => 105.55,
            4 => "Thailand",
            1 => "Bangladesh",
            5 => 25555,
            6 => true,
            7 => ["Bangladesh","Japan","Canada","Thailand","USA"]
        ];
        $countries = [
            'country1' => 'Japan',
            'country4' => 105.55,
            'country5' => "Thailand",
            'country2' => "Bangladesh",
            'country3' => "Bangladesh",
            'country7' => 25555,
            'country6' => true,
            7 => ["Bangladesh","Japan","Canada","Thailand","USA"]
            
        ];
        var_dump($countries);
        var_dump ($countries['country3']);
        var_dump($countries['country6']);
        var_dump($countries[7]);
        echo "<br>";
        echo "<br>";
        echo "<br>";

        
        // PHP Math
        echo (pi()); // returns 3.1415926535898
        echo "<br>";

        echo ("Minimum Number: ".min(0, 150, 30, 20, -8, -200)); // returns -200
        echo "<br>";

        echo ("Maximum Number: ".max(0, 150, 30, 20, -8, -200)); // returns 150
        echo "<br>";
         
        echo ("Absolute Number: ".abs(-6.7)); // returns 6.7
        echo "<br>";

        echo ("sqrt Number: ".sqrt(64)); // returns 8
        echo "<br>";

        echo ("round Number: ".round(0.60)); // returns 1
        echo "<br>";

        echo ("round Number: ".round(0.49)); // returns 0
        echo "<br>";

        echo ("Random Number Auto: ".rand());
        echo "<br>";

        echo ("Random Number(1000000-999999): ".rand(100000, 999999)."<br>");
        echo ("Random Number(1-100): ".rand(1, 100));
        echo "<br>";


        // PHP Constant
        // Syntax
        // define(name, value)
        define("greetings", "Welcome to SET Training Program");
        echo greetings;
    ?>
    
    </body>
</html>