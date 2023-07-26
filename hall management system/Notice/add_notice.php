<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hall";
// connection
$connection = new mysqli($servername, $username, $password, $database);
$nid = "";
$post_date = "";
$title="";
$message = "";

$errorMessage = "";
$successMessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nid = $_POST["nid"];
    $post_date = $_POST["post_date"];
    $title = $_POST["title"];
    $message = $_POST["message"];
    do {
        if (
           empty($nid) || empty($post_date) ||empty($title) || empty($message) ) {
            $errorMessage = "All the fields are required";
            break;
        }
        
        $sql = "INSERT INTO notice (nid, post_date,title, message) " . "VALUES('$nid','$post_date','$title','$message')";

        $result = $connection->query($sql);
        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
        $nid = "";
        $post_date = "";
        $title="";
        $message = "";
        $successMessage = "Room added successfully";
        header("location:/hall management system/Notice/add_notice.php");
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
         background: #bcbbc2;
    }

    .form-control{
        width: 60%;
    }
    #header{
    background: #555555;
    color: white;
    padding: 25px;
    text-align: center;
}
</style>

<body>
    <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Notice Board</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <div class="container my-5">
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
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Notice ID</label>
            <input type="text" class="form-control" name="nid" value="<?php echo $nid; ?>">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date</label>
            <input type="text" class="form-control" name="post_date" value="<?php echo $post_date; ?>">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control"name="title" value="<?php echo $title; ?>">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Message</label>
            <input type="text" class="form-control"name="message" value="<?php echo $message; ?>">
            </div>

            <?php
            if (!empty($successMessage)) {
            echo " <div class='row mb-3'>
            <div class='offset-sm-3 col-sm-6'>
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
            <a class="btn btn-outline-primary" href="/hall management system/home.php" role="button">Back</a>
            </div>
            </div>
            </div>
    </form>
<div>

<div class="container my-5">
        <!-- <h2>Room information</h2>
        <a class="btn btn-primary" href="/hall management system/home.php" role="button">Back to Home</a><br> -->
        <table class="table sm-3">
            <thead>
                <tr>
                    <th>Notice ID</th>
                    <th>Post Date</th>
                    <th>Title</th>
                    <th>Message</th>
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
                $sql = "SELECT *FROM notice";
                $result = $connection->query($sql);
                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }
                while ($row = $result->fetch_assoc()) {
                    echo " 
                    <tr>
                    <td>$row[nid]</td>
                    <td>$row[post_date]</td>
                    <td>$row[title]</td>
                    <td>$row[message]</td>
                    <td>
                    <a class='btn btn-primary btn-sm' href='/hall management system/Notice/delete_notice.php? nid=$row[nid]'>Delete</a>
                    </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>