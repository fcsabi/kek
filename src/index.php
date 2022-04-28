<?php

$con=new mysqli('localhost','kek','titok','kek');

if($con->connect_error){
    die("Hiba! A kapcsolodás sikertelen.");
}

//echo "ok";


$sql=<<<EOT

select * from dolgozok


EOT;
if($result=$con->query($sql)){
echo "Lekérés OK";
}else{
    echo "A lekérés Sikertelen";
}



while($row=$result->fetch_assoc()){
echo $row['nev'];
}





$con->close();