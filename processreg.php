<?php
 

    require "connection.php";

        $nm = $_REQUEST["ntxt"];
        $uid = $_REQUEST["utxt"];
        $st = $_REQUEST["state"];
        $ct = $_REQUEST["city"];


    $qr= "INSERT INTO users (name, user_id, state_id, city_id) VALUES ('$nm', '$uid', '$st', '$ct')";
             
    if (mysqli_query($cn, $qr)) 
    { 
        echo "New record created successfully"; 
    } 
    else 
    { 
        echo "Error: " . $qr . "<br>" . mysqli_error($cn); 
    } 
    mysqli_close($cn)

?>