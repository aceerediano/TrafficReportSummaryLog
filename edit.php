<?php 
 
require_once 'php_action/db_connect.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM summary WHERE id = {$id}";
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
 
    $connect->close();
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Edit Report summary</title>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
 
<fieldset>
    <legend>Update Report summary</legend>
 
    <form action="php_action/update.php" method="post">
        <table cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <td><input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>" /></td>
            </tr>     
            <tr>
                <th>Status</th>
                <td><input type="text" class="form-control" name="status" value="<?php echo $data['status'] ?>" /></td>
            </tr>
            <tr>
                <th>Date Occurred</th>
                <td><input type="date" class="form-control" name="dateOccurred" value="<?php echo $data['dateOccurred'] ?>" /></td>
            </tr>
            <tr>
                <th>Time Occurred</th>
                <td><input type="time" class="form-control" name="timeOccurred" value="<?php echo $data['timeOccurred'] ?>" /></td>
            </tr>
            <tr>
                <th>Location Occurred</th>
                <td><input type="text" class="form-control" name="location" value="<?php echo $data['location'] ?>" /></td>
            </tr>

            <tr>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit" class="btn btn-primary btn-sm">Re-submit changes</button></td>
                <td><a href="index.php"><button type="button">Cancel</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
 
<?php
}
?>