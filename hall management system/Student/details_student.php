<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hall Management System</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>

<style>
    body{
    background: #dacdd2;
    font-family: 'Josefin Sans', sans-serif;
    }
    #header{
    background: #555555;
    color: white;
    font-size: 25px;
    padding: 25px;
    text-align: center;
    }
</style>
<body>
    <div class="row" id="header">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <h2>Students information</h2>
        </div>
        <div class="col-md-4">
        </div>
        <a class="btn" href="/hall management system/home.php" role="button">Back to Home</a><br>        
    </div>
<div class="container my-5">
<table class="table">
    <thead>
    <tr>
    <th>Hall ID</th>
    <th>Sudent ID</th>
    <th>Student Name</th>
    <th>Current Year</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Address</th>
    <th>Room Number</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "hall";
        // connection
        $connection = new mysqli($servername, $username, $password, $database);
        // check connection
        if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
        }
        // read all row from database
        $sql = "SELECT *FROM student";
        $result = $connection->query($sql);
        if (!$result) {
        die("Invalid query: " . $connection->error);
        }
        while ($row = $result->fetch_assoc()) {
        echo " <tr>
        <td>$row[hall_id]</td>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[year]</td>
        <td>$row[email]</td>
        <td>$row[phone]</td>
        <td>$row[address]</td>
        <td>$row[room]</td>
        <tr>
        ";
        }
        ?>
    </tbody>
</table>
</div>
</body>
</html>