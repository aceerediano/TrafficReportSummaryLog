<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
  $name = $_POST['name'];
    $status = $_POST['status'];
    $date = $_POST['dateOccurred'];
    $time = $_POST['timeOccurred'];
    $location = $_POST['location'];
 
    $id = $_POST['id'];
 
    $sql = "UPDATE summary SET name = '$name', status = '$status', dateOccurred = '$dateOccurred', timeOccurred = '$timeOccurred', location = '$location' WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully Updated!</p>";
        echo "<a href='../edit.php?id=".$id."'><button type='button'>Return to update</button></a>";
        echo "<a href='../index.php'><button type='button'>Back to report summary menu</button></a>";
    } else {
        echo "Error while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
 
?>