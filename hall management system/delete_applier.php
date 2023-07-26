<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hall";
    // connection
    $connection = new mysqli($servername, $username, $password, $database);
    $sql = "DELETE FROM appl WHERE id=$id";
    $connection->query($sql);
}
header("location:/hall management system/applier.php");
exit;
?>
