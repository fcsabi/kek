<?php

$con=new mysqli('localhost','kek','titok','kek');

if($con->connect_error){
    die("Hiba! A kapcsolodás sikertelen.");
}

echo "ok";
$con->close();