<?php

include('connection.php');
$id=$_GET['id'];


$query= "SELECT * FROM std WHERE id='$id'";
$data= mysqli_query($conn,$query);
$result= mysqli_fetch_assoc($data);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name= "name"  value= " <?php echo $result['name'] ; ?>" required> <br><br>

        <label for="email"> email</label>
        <input type="email" name="email"  value= " <?php echo $result['email'] ; ?>" required> <br><br>

        <label for="password"> password</label>
        <input type="password" name="password"  value= " <?php echo $result['password'] ; ?>"> <br><br>

        <input type="submit" name="submit" value="update">
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $fn= $_POST["name"];
    $em=$_POST['email'];
    $ps=$_POST['password'];
    

    $update = " UPDATE std SET name='$fn',email='$em' , password='$ps' WHERE id = '$id'";

    $data= mysqli_query($conn,$update);

    if($data){
        echo "update success fully";
        header("location:display.php");
    } 
    else {
        echo " not update";
    }

   }


?>