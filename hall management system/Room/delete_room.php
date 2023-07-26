<?php
if (isset($_GET["room_no"])) {
    $room_no= $_GET["room_no"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hall";
    // connection
    $connection = new mysqli($servername, $username, $password, $database);
    $sql = "DELETE FROM room WHERE room_no=$room_no";
    $connection->query($sql);
}
header("location:/hall management system/Room/room.php");
exit;
?>
