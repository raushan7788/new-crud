<?php
include('connection.php');

$id=$_GET['id'];

$query= " DELETE FROM std WHERE id='$id'";

$data= mysqli_query($conn,$query);

if($data){
    echo "<script>alert('Record Deleted Successfully')</script>";
}
else{
    echo "<script>alert('Failed to Delete Record')</script>";
}

header("location:display.php");

?>