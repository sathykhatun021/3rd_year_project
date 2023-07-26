<?php 
    $con = mysqli_connect('localhost', 'root', '', 'hall_payment');
    if(!$con){
        die(mysqli_error("Error"+$con));
    }
?>