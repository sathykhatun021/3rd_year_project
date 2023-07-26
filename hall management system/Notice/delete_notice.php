<?php
if (isset($_GET["nid"])) {
    $nid= $_GET["nid"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hall";
    // connection
    $connection = new mysqli($servername, $username, $password, $database);
    $sql = "DELETE FROM notice WHERE nid=$nid";
    $connection->query($sql);
}
header("location:/hall management system/Notice/notice.php");
exit;
?>
