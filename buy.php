<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Eco-Find - Buy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jQuery -->
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div>
    <?php require 'header.php'; ?>

    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to Eco-Find!</h1>
            <p>Browse second-hand products and buy sustainably.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Example Product -->
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="img/cannon_eos.jpg" alt="Canon EOS">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Canon EOS</h3>
                            <p>Price: Rs. 36000.00</p>
                            <?php if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                if(check_if_added_to_cart(1)){
                                    echo '<a href="#" class="btn btn-block btn-success disabled">Added to cart</a>';
                                } else { ?>
                                    <a href="cart_add.php?id=1" class="btn btn-block btn-primary">Add to cart</a>
                                <?php } 
                            } ?>
                        </div>
                    </center>
                </div>
            </div>
            <!-- Repeat same block for other products -->
        </div>
    </div>
</div>
</body>
</html>
