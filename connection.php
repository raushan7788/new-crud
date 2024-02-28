<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="new_crud";

$conn = "mysqli_connet($servername,$username,$password,$database)";

if(!$conn){
    echo "connection fail.mysqli_connect_error($conn)";
}

else{
    echo "connection succes fully";
}


?>