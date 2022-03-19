<?php

if(isset($_POST['save'])) {

    require_once "connection.php";

    
    $mobile     = $_POST['mobile'];
    $email      = $_POST['email'];
    $session    = $_POST['session'];
    $batch      = $_POST['batch'];
    $name       = $_POST['name'];
    
    $studentID  = "STD-".rand();

    $sql = "INSERT INTO students (student_id, student_name, mobile, email, session, batch)
    VALUES ('$studentID', '$name', '$mobile', '$email', '$session', '$batch')";

    $execute = mysqli_query($connection, $sql);

    if ($execute) {
        header("location: index.php");
        mysqli_close($connection);
        exit();
    } else {
        echo "Error: " . $sql . " " . mysqli_error($connection);
        mysqli_close($connection);
    }
}
?>