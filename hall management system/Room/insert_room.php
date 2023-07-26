<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hall";
// connection
$connection = new mysqli($servername, $username, $password, $database);
$room_no = "";
$floor_no = "";
$block_no = "";

$errorMessage = "";
$successMessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $room_no = $_POST["room_no"];
    $floor_no = $_POST["floor_no"];
    $block_no = $_POST["block_no"];
    do {
        if (
           empty($room_no) || empty($floor_no) || empty($block_no)) {
            $errorMessage = "All the fields are required";
            break;
        }
        
        $sql = "INSERT INTO room (room_no, floor_no, block_no) " . "VALUES('$room_no','$floor_no','$block_no')";

        $result = $connection->query($sql);
        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $room_no = "";
        $floor_no = "";
        $block_no = "";
        $successMessage = "Room added successfully";
        header("location:/hall management system/Room/insert_room.php");
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
        <h2>Insert New Room</h2>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    <div class="container my-5" style="margin: 0px 0px 0px 320px;">
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
            <label class="col-sm-2 col-form-label">Room Number</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="room_no" value="<?php echo $room_no; ?>">
            </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Floor Number</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="floor_no" value="<?php echo $floor_no; ?>">
            </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Block Number</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="block_no" value="<?php echo $block_no; ?>">
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
</body>
</html>