<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Basic PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <style type="text/css">
            
            .page-header {
                background-color:grey;
                padding: 50px;
                border-radius: 10px;
            }

        </style>
    </head>

    <body>

        <div class="page-header text-center">
                <h1>PHP -- First PHP Page </h1>
                <p> We are learning PHP. </p>
        </div>
            
        <br>

        <div class="container" style="border: 1px solid green">
        
        <?php

        $greetings = "Hello Banglasesh!";
        echo $greetings;
        echo "<br>";

        $txt1 = "Hello world!";
        echo "I love " . $txt1;
        echo "<br>";
        
        $txt2 = " Bangladesh.";
        echo "I love " . $txt1 . $txt2;
        echo "<br>";

        $x = 5;
        $y = 10.50;

        $sum = $x + $y;
        echo "Sum of Two given Numbers is: " . $sum;
        echo "<br>";

        $sub = $y - $x;
        echo "Sub of Two given Numbers is: ".$sub;
        echo "<br>";

        // var_dump($sub);
        
        //  This is a single-line comment
        //  This is also a single-line comment

        /*
        This is a multiple-lines comment block
        that spans over multiple
        lines
        */

        ?>
        </div>

    </body>
</html>