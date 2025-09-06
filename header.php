<?php
if(!isset($_SESSION)) { session_start(); }
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Toggle button for mobile view -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <!-- Logo / Brand -->
            <a href="index.php" class="navbar-brand">Eco-Find</a>
        </div>
        
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <!-- Show Buy and Sell always -->
                <li><a href="buy.php"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></li>
                <li><a href="sell.php"><span class="glyphicon glyphicon-upload"></span> Sell</a></li>
                
                <?php if(isset($_SESSION['email'])) { ?>
                    <!-- When user is logged in -->
                    <li><a href="cart.php"><span class="glyphicon glyphicon-list-alt"></span> Cart</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                <?php } else { ?>
                    <!-- When user is NOT logged in -->
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
