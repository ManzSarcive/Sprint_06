<?php

    $con = new mysqli('localhost', 'thomasB', 'thomassql', 'Vap Factory');

    if (!$con){
        die(mysqli_error($con));
    } 

?>