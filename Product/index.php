<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h2>Add Product</h2>
    <form  method="post" enctype="multipart/form-data">
        <label for="title">Product Title:</label><br>
        <input type="text" id="title" name="title"><br><br>

        <label for="description">Product Description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>

        <label for="sales">Sales Price:</label><br>
        <input type="text" id="sales" name="sales"><br><br>

        <label for="regular_price">Regular Price:</label><br>
        <input type="text" id="regular_price" name="regular_price"><br><br>

        <label>Status:</label><br>
        <input type="radio" id="active" name="status" value="active" checked>
        <label for="active">Active</label>
        <input type="radio" id="inactive" name="status" value="inactive">
        <label for="inactive">Inactive</label><br><br>

        <label for="sku">SKU Code:</label><br>
        <input type="text" id="sku" name="sku"><br><br>

        <label for="category">Product Category:</label><br>
        <select id="category" name="category">
            <option value="man">Man</option>
            <option value="woman">Woman</option>
            <option value="child">Child</option>
        </select><br><br>

        <label for="image">Product Image:</label><br>
        <input type="file" id="image" name="image"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>



<?php

include('connection.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $title = $_POST['title'];
$description = $_POST['description'];
$sales = $_POST['sales'];
$regular_price = $_POST['regular_price'];
$status = $_POST['status'];
$sku = $_POST['sku'];
$category = $_POST['category'];

// Image handling
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$image_path = "uploads/" . $image;

move_uploaded_file($image_tmp, $image_path);

// SQL query to insert data into database
$sql = "INSERT INTO products (title, description, sales_price, regular_price, status, sku, category, image)
        VALUES ('$title', '$description', '$sales', '$regular_price', '$status', '$sku', '$category', '$image_path')";

if ($conn->query($sql) === TRUE) {
    echo "Product added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>