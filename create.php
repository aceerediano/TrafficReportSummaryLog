<!DOCTYPE html>
<html>
<head>
    <title>Add Report Summary</title>
 
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
<div class="manageRental">
<div class="col-md-80">
<td><a href="index.php"><button type="button" class="btn btn-secondary btn-sm">Back</button></a></td>
</div>
<br><br>
<fieldset>

    <legend>Please fill up the necessary information below.</legend>
    <br>

    <form action="php_action/create.php" method="post">
   <table cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <td><input type="text" class="form-control" name="name" placeholder="Full Name" /></td>
            </tr>     
            <tr class="table-default">
                <th>Status</th>
                <td><input type="text" class="form-control" name="status" placeholder="rate of incident" /></td>
            </tr>
            <tr>
                <th>Date Occurred</th>
                <td><input type="date" class="form-control" name="dateOccurred" /></td>
            </tr>
            <tr class="table-default">
                <th>Time Occurred</th>
                <td><input type="time" class="form-control" name="timeOccurred" /></td>
            </tr>
            <tr>
                <th>Location Occurred</th>
                <td><input type="text" class="form-control" name="location" placeholder="Location" /></td>
             </tr>
             <tr>
                <th>Comment/reaction</th>
                <td><textarea rows="7" cols="50">
                    </textarea>
                </td>
             </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary btn-sm">Submit claim/report</button></td>
            </tr>
        </table>


</form>
 
</fieldset>
 
</body>
</html>