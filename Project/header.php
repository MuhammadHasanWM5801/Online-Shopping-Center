<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce </title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  </head>
<body>
  <h1 ></h1>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <img src="https://shmector.com/_ph/13/979709898.png" width="5%"><a class="navbar-brand" href="#">  Online Shopping Center</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                
            </ul>
          
          <span class="navbar-text">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="HOM.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      SHOP NOW HERE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="men.php">Man's Clothes</a>
                      <a class="dropdown-item" href="women.php">Women's Clothes</a>
                      <a class="dropdown-item" href="kids.php">Kid's Clothes</a>
                      <a class="dropdown-item" href="grossary.php">Grocery Items</a>
                    </div>
                  </li> 
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="contact.php" id="para1">CONTACT US</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" id="contact" href="cart.php">
                      <i class="fa fa-cart-arrow-down" aria-hidden="true">Cart</i>
                      <?php

                      if(isset($_SESSION['cart'])){
                        $count= count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                      }else{
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                      }





                    ?>
                  
                  </a>
                  </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="login.php">LOGIN</a>
                      <a class="dropdown-item" href="logout.php">LOGOUT</a>
                      
                    </div>
                  </li> -->
              </ul>
          </span>
        </div>
      </nav>