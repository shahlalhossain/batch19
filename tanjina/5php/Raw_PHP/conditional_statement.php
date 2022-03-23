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

//    $age = 25;
//    $age = null;
//    $customerAge = isset($age) ? $age : "Age NOT Found";
//    echo $customerAge;


//    $age = 60;
//    if ($age < 25) {
//        echo "Hello Dear, Your Age is :".$age;
//        echo "<br>";
//        echo "Your are Young";
//    } elseif ($age > 50) {
//        echo "Hello Dear, Your Age is :".$age;
//        echo "<br>";
//        echo "Your are too Old";
//    } elseif ($age > 1000) {
//        echo 'OK';
//    } else {
//        echo 'NOT OK';
//    }


//    echo "Hello Dear, Your Age is :".$age. "Your are Young";

    // Switch
    $favcolor = "green";
    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";

            // Action(s)
            // Email, SMS, Customer Table Update
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

<br><br><br>

</body>
</html>