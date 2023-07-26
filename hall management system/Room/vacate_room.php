<?php
if (isset($_GET["hall_id"])) {
    $hall_id= $_GET["hall_id"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hall";
    // connection
    $connection = new mysqli($servername, $username, $password, $database);
    $sql = "DELETE FROM allot WHERE hall_id=$hall_id";
    $connection->query($sql);
}
header("location:/hall management system/Room/vacating.php");
exit;
?>
