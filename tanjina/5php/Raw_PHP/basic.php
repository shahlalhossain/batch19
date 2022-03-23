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

    <body class="text-center shadow-sm" style="border: 1px solid pink; margin: 20px;">
        <h3>My First PHP Page</h3>
        
        <?php

        $greetings = "Hello Banglasesh!";
        echo $greetings;
        echo "<br>";

        $txt = "Hello world!";
        $txt = "Bangladesh";
        echo "I love " . $txt . ".";
        echo "<br>";

        $x = 5;
        $y = 10;

        $sum = $x + $y;
        echo "Sum of Two given Numbers is: ".$sum;
        echo "<br>";

        $sub = $y - $x;
        echo "Sub of Two given Numbers is: ".$sub;
        echo "<br>";
        $a = 20;
        $b = 10;
        $addition = $a + $b;
        $subtract = $a - $b;
        $multiple = $a * $b;
        $div = $a / $b;
        echo "Sum of Two given Numbers is: ".$addition ."<br>";
        echo "Sub of Two given Numbers is: ".$subtract ."<br>";
        echo "Multiplication of Two given Numbers is: ".$multiple ."<br>";
        echo "Div of Two given Numbers is: ".$div ."<br>";
        $x = 5;
        $y = 10.5;
        $z = $x + $y;
        echo "Sum of Two given Numbers is: " . $z;
        echo "<br>";
        var_dump($z);
        //  This is a single-line comment
        //  This is also a single-line comment

        /*
        This is a multiple-lines comment block
        that spans over multiple
        lines
        */

        ?>

    </body>
</html>