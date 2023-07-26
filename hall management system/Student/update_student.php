<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hall";
// connection
$connection = new mysqli($servername, $username, $password, $database);

$hall_id = "";
$id = "";
$name = "";
$year = "";
$email = "";
$phone = "";
$address = "";
$room = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET method: show the data of the student
    if (!isset($_GET["hall_id"])) {
        header("location:/hall management system/Student/student.php");
        exit;
    }
    $hall_id = $_GET["hall_id"];

    //read the row of the selected student from database table
    $sql = "SELECT *FROM student WHERE hall_id= $hall_id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("location:/hall management system/Student/student.php");
        exit;
    }
    $hall_id = $row["hall_id"];
    $id = $row["id"];
    $name = $row["name"];
    $year = $row["year"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
    $room = $row["room"];
} 
else {
    //POST method: update the data of the student
    $hall_id = $_POST["hall_id"];
    $id = $_POST["id"];
    $name = $_POST["name"];
    $year = $_POST["year"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $room = $_POST["room"];
    do {
        if (empty($hall_id) || empty($id) || empty($name) || empty($year) || empty($email) || empty($phone) || empty($address) || empty($room)) {
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE student " . "SET id ='$id',name='$name', year='$year', email='$email', phone='$phone', address='$address', room='$room'" . "WHERE hall_id = $hall_id";
        $result = $connection->query($sql);
        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $successMessage = "Updated successfully";
        header("location:/hall management system/Student/student.php");
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
    padding: 25px;
    text-align: center;
    }
</style>


<body>
    <div class="row" id="header">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <h2>Update Student</h2>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    <div class="container my-5">
        <!-- <h2>Update Student</h2> -->
        <?php
        if (!empty($errorMessage)) {
            echo " 
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' arialabel='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="POST">
            <input type="hidden" value="<?php echo $hall_id; ?>">
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
                <label class="col-sm-2 col-form-label">Current Year</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="year" value="<?php echo $year; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Room Number</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="room" value="<?php echo $room; ?>">
                </div>
            </div>

            <?php
            if (!empty($successMessage)) {
                echo " 
                    <div class='row mb-3'>
                    <div class=''offset-sm-3 col-sm-6>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' arialabel='Close'></button>
                    </div>
                    </div>
                    </div>
                ";
            }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-2 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/hall management system/Student/student.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
        <div>
</body>

</html>