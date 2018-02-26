<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
    $name = $_POST['name'];
    $status = $_POST['status'];
    $dateOccurred = $_POST['dateOccurred'];
    $timeOccurred = $_POST['timeOccurred'];
    $location = $_POST['location'];
 
    $sql = "INSERT INTO summary (name, status, dateOccurred, timeOccurred, location, active) VALUES ('$name', '$status', '$dateOccurred', '$timeOccurred', '$location', 1)";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Created.</p>";
        echo "<a href='../create.php'><button type='button'>Return</button></a>";
        echo "<a href='../index.php'><button type='button'>Back to report summary menu</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>