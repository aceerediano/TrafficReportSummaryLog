<?php require_once 'php_action/db_connect.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Traffic Report Summary Log (SPOOR)</title>
 
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  div.container {
    width: 100%;
    border: 1px white;
}

header, footer {
    padding: 2em;
    color: black;
    background-color: #44ffd9;
    
    clear: left;
    text-align: center;
    font-family: tahoma;
}





article {
    margin-left: 170px;
    border-left: 1px black;
    padding: 2em;
    overflow: hidden;
}


</style>


</head>
<body>


<header>
<br><h1 class="col-md-85 text-center"><legend>Spoor® Traffic Report Summary Log</legend></h1><br>
</header>

 
<div class="container">
<div class="table-responsive text-center">
<a href="create.php"><button type="button" class="btn btn-basic btn-lg text-center">Make a claim</button></a>
    </div>



    <table border="1" cellspacing="0" cellpadding="0"
    class="table table-striped table-bordered table-hover table-condensed">
        <thead class="thead-inverse"><br>
            <tr>
                <th>Name of witness</th>
                <th>Incident Status</th>
                <th>Date Occurred</th>                   
                <th>Time Occurred</th>
                <th>Location Occurred</th>
                <th>Settings</th>
            </tr>
        </thead>
        <tbody>
             <?php
            $sql = "SELECT * FROM summary WHERE active = 1";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['name']."</td>
                        <td>".$row['status']."</td>
                        <td>".$row['dateOccurred']."</td>
                        <td>".$row['timeOccurred']."</td>
                        <td>".$row['location']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='button' class='btn btn-primary'>Update</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button' class='btn btn-danger'>Remove</button></a>
                           
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No reports claimed</center></td></tr>";
            }
            ?>
        </tbody>
    



    </table>
 
  <footer>Copyright &copy; Spoor</footer>
</div>
 
</body>
</html>