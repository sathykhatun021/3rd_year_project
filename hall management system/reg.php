<?php
include("connection.php");
include("user_login.php");

$servername = "localhost";
$username = "root";
$password = "";
$database = "hall";
// connection
$connection = new mysqli($servername, $username, $password, $database);
$fn = "";
$iln = "";
$email = "";
$address = "";
$user = "";
$pass = "";

$errorMessage = "";
$successMessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fn = $_POST["fn"];
    $ln = $_POST["ln"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    do {
        if (
           empty($fn) || empty($ln) || empty($email) || empty($address) || empty($user) || empty($pass)
        ) {
            $errorMessage = "All the fields are required";
            break;
        }
        
        $sql = "INSERT INTO reg (fn, ln, email, address , user,pass) " . "VALUES('$fn','$ln','$email',' $address','$user','$pass')";

        $result = $connection->query($sql);
        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $fn = "";
        $iln = "";
        $email = "";
        $address = "";
        $user = "";
        $pass = "";
        $successMessage = "Student added successfully";
        header("location:/hall management system/reg.php");
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
    background: gray;
    font-family: 'Josefin Sans', sans-serif;
}
    #header{
    background:rebeccapurple;
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
        <h3>Registration Form</h3>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    <div class="container my-5"  style="margin: 0px 0px 0px 320px;">
        <!-- <h2>Add New Student</h2> -->
            <?php
                if (!empty($errorMessage)) {
                    echo " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' arialabel='Close'></button>
                </div>
                ";
                }
            ?>
        <form method="POST">
        <div class="row mb-3">
            <label class="col-sm-1 col-form-label">First name</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="fn" value="<?php echo $fn; ?>">
            </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Last Name</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="ln" value="<?php echo $ln; ?>">
            </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Email</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Address</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
            </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Username</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="user" value="<?php echo $user; ?>">
            </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Password</label>
            <div class="col-sm-6">
            <input type="password" class="form-control" name="pass" value="<?php echo $pass; ?>">
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
            <div class="offset-sm-1 col-sm-3 d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="/hall management system/index.php" role="button">Back</a>
            </div>
            </div>
    </form>
    <div>
</body>
</html>