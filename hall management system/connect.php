<?php 
    $con = mysqli_connect('localhost', 'root', '', 'hall');
    if(!$con){
        die(mysqli_error("Error"+$con));
    }
?>