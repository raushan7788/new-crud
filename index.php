<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="POST">

<label for="name">Name</label>
<input type="text" name="name" placeholder="Name" required><br><br>

<label for="email">Email</label>
<input type="email" name="email" placeholder="Email" required><br><br>

<label for="password">Password</label>
<input type="password" name="password" placeholder="Password" required><br><br>

<label for="phone">Phone</label>
<input type="number" name="phone" placeholder="Phone" required><br><br>

<input type="submit" name="submit" value="submit">

</form>

</body>
</html>

<?php
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $phone =$_POST['phone'];

$query = "INSERT INTO data(name,email,password,phone)VALUES('$name', '$email', '$password', '$phone')";

$data = mysqli_query($conn,$query);

if($data){
    echo "insert succes fully";
}

else{
    echo "not inserted".mysqli_error($conn);
}


}


?>