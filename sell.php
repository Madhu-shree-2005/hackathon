<?php
session_start();
require 'connection.php';

if (!isset($_SESSION['email'])) {
    header('location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $image = mysqli_real_escape_string($con, $_POST['image']); // for now, use image URL

    $query = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $success = "Product listed successfully!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Eco-Find - Sell</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php require 'header.php'; ?>

    <div class="container" style="margin-top: 80px;">
        <div class="jumbotron">
            <h2>Sell Your Product</h2>
            <p>List an item and make it available for others to buy.</p>
        </div>

        <?php if (isset($success)) { ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php } ?>

        <form method="post" action="sell.php">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="name" required class="form-control">
            </div>
            <div class="form-group">
                <label>Price (Rs.)</label>
                <input type="number" name="price" required class="form-control">
            </div>
            <div class="form-group">
                <label>Image URL</label>
                <input type="text" name="image" required class="form-control">
            </div>
            <button type="submit" class="btn btn-success">List Product</button>
        </form>
    </div>
</body>
</html>
