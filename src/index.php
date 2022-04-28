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

echo "<table>";

while($row=$result->fetch_assoc() ){
echo "<tr>\n";
echo "<td>\n" .$row['az']."</td>\n";
echo "<td>\n" .$row['nev']."</td>\n";
echo "<td>\n" .$row['telepules']."</td>\n";
echo "<td>\n" .$row['fizetes']."</td>\n";
}
echo "</tr>\n";
echo "</table>\n";




$con->close();