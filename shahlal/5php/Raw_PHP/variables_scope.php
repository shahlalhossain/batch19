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

    <body>
        <?php
        $x = 5555; // global scope

        function myTest($x) {
            // using x inside this function will generate an error
            // echo "<p>Variable x inside function is: $x</p>";
            echo "<p>Variable x inside function is: " . $x . "</p>";
        }
       
        myTest($x);
        echo "<p>Variable x outside function is: $x</p>";



        function myTest2() {
            $y = 9999; // local scope
            echo "<p>Variable x inside function is: $y</p>";
        }

        myTest2();
        // using x outside the function will generate an error
        echo "<p>Variable x outside function is: $y</p>";

        ?>
    </body>
</html>