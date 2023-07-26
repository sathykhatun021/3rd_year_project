<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Management System </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    body{
    background: #bcbbc2;
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
      <h3>Find Student</h3>
    </div>
    <div class="col-md-4">
    </div>
  </div>
    <div class="container my-5">
        <form method="POST">
            <input type="text" placeholder="Search item" name="search">
            <button class="btn btn-dark btn-sm"  name="submit">Search</button>
            <button class="btn btn-dark btn-sm" > <a href="/hall management system/home.php" style="text-decoration: none;">Back</a></button>
        </form>

        <div class="container my-5">
            <table class="table">
                <?php
                if(isset($_POST['submit'])){
                    $search = $_POST['search'];
                    $sql = "Select * from student where hall_id ='$search' or id ='$search' or room ='$search' ";
                    $result = mysqli_query($con,$sql) ;
                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo'
                            <thead>
                            <tr>
                            <th>Hall ID</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Current Year</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Room Number</th>
                            </tr>
                            </thead>
                            ';
                            while($row = mysqli_fetch_assoc($result)){
                            echo'
                            <tbody>
                            <tr>
                            <td>'.$row['hall_id'].'</td>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['year'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['phone'].'</td>
                            <td>'.$row['address'].'</td>
                            <td>'.$row['room'].'</td>
                            </tr>
                            </tbody>';
                            }
                        }
                        else{
                            echo'<h2 class="text-danger">Data Not Found</h2>';
                        }
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>