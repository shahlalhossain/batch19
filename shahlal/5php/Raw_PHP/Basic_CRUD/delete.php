<?php
include_once 'connection.php';

$recordID = $_GET["id"];

$sql = "DELETE FROM students WHERE id=$recordID";

$execute = mysqli_query($connection, $sql);

if ($execute) {
   header("location: index.php");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
mysqli_close($connection);
?>