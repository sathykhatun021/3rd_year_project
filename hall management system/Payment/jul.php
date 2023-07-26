<?php
    include 'connect.php';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hall_payment";
    // connection
    $connection = new mysqli($servername, $username, $password, $database);
    $hall_id = "";
    $id = "";
    $name = "";
    $room = "";
    $month = "";
    $year = "";
    $errorMessage = "";
    $successMessage = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $hall_id = $_POST["hall_id"];
        $id = $_POST["id"];
        $name = $_POST["name"];
        $room = $_POST["room"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        do {
            if (
            empty($hall_id) || empty($id) || empty($name) || empty($room) || empty($month)|| empty($year)) {
                $errorMessage = "All the fields are required";
                break;
            }
            
            $sql = "INSERT INTO july (hall_id, id, name, room, month, year) " . "VALUES('$hall_id','$id','$name','$room','$month','$year')";

            $result = $connection->query($sql);
            if (!$result) {
                $errorMessage = "Invalid query: " . $connection->error;
                break;
            }
            $hall_id = "";
            $id = "";
            $name = "";
            $room = "";
            $month = "";
            $year = "";
            $successMessage = "Student added successfully";
            header("location:/hall management system/Payment/jul.php");
            exit;
        } while (false);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
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
    padding: 0px 25px;
    text-align: center;
    }

    .month li{
        float: left;
        position: relative;
        width: auto;
        margin:17px;
        text-decoration: none;
    }
    .month a{
        text-decoration: none;
        color: white;
    }

    .month a:hover{
        color: blue;
    }
</style>

<body>
    <div class="row" id="header">
        <!-- <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <h2>Payment</h2>
        </div>
        <div class="col-md-4">    
        </div> -->
        <div class="month">
            <ul>
                <li type="none"> <a href="/hall management system/Payment/jan.php"> January</a></li>
                <li type="none"> <a href="/hall management system/Payment/feb.php"> February</a></li>
                <li type="none"> <a href="/hall management system/Payment/mar.php"> March</a></li>
                <li type="none"> <a href="/hall management system/Payment/apr.php"> April</a></li>
                <li type="none"> <a href="/hall management system/Payment/may.php"> May</a></li>
                <li type="none"> <a href="/hall management system/Payment/june.php"> June</a></li>
                <li type="none" style="text-decoration: underline;"> <a href="#"> July</a></li>
                <li type="none"> <a href="/hall management system/Payment/aug.php"> August</a></li>
                <li type="none"> <a href="/hall management system/Payment/sep.php"> September</a></li>
                <li type="none"> <a href="/hall management system/Payment/oct.php"> October</a></li>
                <li type="none"> <a href="/hall management system/Payment/nov.php"> November</a></li>
                <li type="none"> <a href="/hall management system/Payment/dec.php"> December</a></li>
            </ul>
        </div>
    </div>

    <div class="container my-5">
        <!-- <h2>Add New Student</h2> -->
            
        <form method="POST">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Hall ID</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="hall_id" value="<?php echo $hall_id; ?>">
            </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Student ID</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="id" value="<?php echo $id; ?>">
            </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Student Name</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
            </div>
            </div>
            
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Room Number</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="room" value="<?php echo $room; ?>">
            </div>
            </div>

            <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Month</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="month" value="<?php echo $month; ?>">
            </div>
            </div>

            <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Year</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="year" value="<?php echo $year; ?>">
            </div>
            </div>
            <?php
            if (!empty($successMessage)) {
            echo " <div class='row mb-3'>
            <div class=''offset-sm-3 col-sm-6>
            <div class='alert alert-success alert-dismissible fade show' role='alert'><strong>$successMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' arialabel='Close'></button>
            </div>
            </div>
            </div>
            ";
            }
            ?>
            <div class="row mb-3">
            <div class="offset-sm-2 col-sm-3 d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="/hall management system/home.php" role="button">Back</a>
            </div>
            </div>
    </form>
    <div>

    <div class="container my-6">
        <div class="row" id="header" style="margin-top: 50px;">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            <h2>Find Information</h2>
            </div>
            <div class="col-md-4">    
            </div>
        </div>
        <form method="POST">
            <input type="text" placeholder="Search item" name="search" style="margin: 30px 10px 0px 400px;">
            <button class="btn btn-dark btn-sm"  name="submit">Search</button>
        </form>

        <div class="container my-5">
            <table class="table">
                <?php
                if(isset($_POST['submit'])){
                    $search = $_POST['search'];
                    $sql = "Select * from july where hall_id ='$search' or id ='$search' or name='$search' or month ='$search' ";
                    $result = mysqli_query($con,$sql) ;
                    if($result){
                        if(mysqli_num_rows($result)>0){
                            echo'
                            <thead>
                            <tr>
                            <th>Hall ID</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Room Number</th>
                            <th>Month</th>
                            <th>Year</th>
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
                            <td>'.$row['room'].'</td>
                            <td>'.$row['month'].'</td>
                            <td>'.$row['year'].'</td>
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

    <div class="container my-5">
        <div class="row" id="header">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            <h2>Fees information</h2>
            </div>
            <div class="col-md-4">    
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Hall ID</th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Room Number</th>
                    <th>Month</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "hall_payment";

                // connection
                $connection = new mysqli($servername, $username, $password, $database);
                // check connection
                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }
                // read all row from database
                $sql = "SELECT *FROM july";
                $result = $connection->query($sql);
                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }
                while ($row = $result->fetch_assoc()) {
                    echo " 
                    <tr>
                    <td>$row[hall_id]</td>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[room]</td>
                    <td>$row[month]</td>
                    <td>$row[year]</td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>