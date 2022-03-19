<?php


if(count($_POST) > 0) {
    // Include database connection file
    require_once "connection.php";

    $recordID   = $_POST['id'];

    $name       = $_POST['name'];
    $mobile     = $_POST['mobile'];
    $email      = $_POST['email'];
    $session    = $_POST['session'];
    $batch      = $_POST['batch'];

    $recordUpdateQuery = "UPDATE students SET student_name='$name', mobile='$mobile', email='$email', session='$session', batch='$batch' WHERE id=$recordID";

    $executeQuery = mysqli_query($connection, $recordUpdateQuery);

    if ($executeQuery) {
        header("location: index.php");
        exit();
    } else {
        echo "Record NOT Update, Error Found";
    }
}
?>
