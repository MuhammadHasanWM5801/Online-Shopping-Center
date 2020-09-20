<?php
// start session 

session_start();




require_once("CreateDb.php");
require_once("component.php");

// create instant createdb class


$database = new CreateDb("Productsdb","Productstb");

if(isset($_POST['add'])){

  //print_r($_POST['product_id']);
  if(isset($_SESSION['cart'])){

    $item_array_id = array_column($_SESSION['cart'],"product_id");
    
    if(in_array($_POST['product_id'],$item_array_id)){
      echo "<script>alert('Product is already added in the cart..!!')</script>";
      echo "<script>window.location='HOM.php</script>";


    }else{
      $count = count($_SESSION['cart']);
      $item_array = array(
        'product_id' =>$_POST['product_id']
      );

      $_SESSION['cart'][$count]= $item_array;
      


    }

  }else{

    $item_array = array(
      'product_id' =>$_POST['product_id']
    );

    //create new session variable

    $_SESSION['cart'][0]= $item_array;
    print_r($_SESSION['cart']);


  }

}

?>








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
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php" id="para1">CONTACT US</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact" href="cart.php">
                      <i class="fa fa-cart-arrow-down" aria-hidden="true">Cart</i>
                      <?php

                      if(isset($_SESSION['cart'])){
                        $count= count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                      }else{
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\"></span>";
                      }





                    ?>
                  
                  </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="login.php">LOGIN</a>
                      <a class="dropdown-item" href="logout.php">LOGOUT</a>
                      
                    </div>
                  </li>
              </ul>
          </span>
        </div>
      </nav>

      <!-- Navigation Bar -->
      
      
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.w3care.com/images/uploads/industry-vertical/ecommerce-shopping-banner.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="wo">Women Clothes And All things available For women And Men</h5>
              <p class="me">we are Provide all use ful things for man women and Kids</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://demo.sparklewpthemes.com/sparklestorepro/wp-content/uploads/2017/01/bannerone.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="pr">We Are also Provide Online Services</h5>
              <p class="sh">You Can Do Shope Online</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="https://image.etashee.com/images/category/kids/kids-banner.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="pr">We Are also Provide Online Services</h5>
              <p class="sh">You Can Do Shope Online</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="https://www.blog.indiabazaaronline.com/wp-content/uploads/2015/04/cotton-salwar-kameez-online.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="pr">We Are also Provide Online Services</h5>
              <p class="sh">You Can Do Shope Online</p>
            </div>
          </div>


          

          <div class="carousel-item">
            <img src="https://i0.wp.com/blog.daraz.com.np/wp-content/uploads/2019/07/Homepage-Main-Banner-Desktop-copy-2-1.png?fit=1200%2C804&ssl=1" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="pr">We Are also Provide Online Services</h5>
              <p class="sh">You Can Do Shope Online</p>
            </div>
          </div>











          <div class="carousel-item">
            <img src="https://cdn.shopify.com/s/files/1/0272/2444/0910/files/New-Year-Sale-slider_1920x.png?v=1577863026" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="g" >We have highly branded Grocery Product</h5>
              <p class="w" > Here available is All Kinds Of Grocery Items </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- complete slider -->


    <div class="maincard">
        
        <div class="card1">
                <div>

                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                    <div>
                        <h3>Free Shipping</h3>

                    </div>



        </div>
        <div class="card2">
            <div>

                <i class="fa fa-headphones" aria-hidden="true"></i>
            </div>
                <div>
                    <h3>24/7 Support</h3>

                </div>

        </div>
        <div class="card3">

            <div>

                <i class="fas fa-thumbs-up" aria-hidden="true"></i>
            </div>
                <div>
                    <h3>Best Quality</h3>

                </div>

        </div>

    </div>
    <hr>

<!-- Cards Complete -->

<div class="new">
    <div class="heading">
        <h1> Our Products</h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
          <?php
          // component("Men Shirts","RS: 1000","m.jpg");
          // component("Women Clothes","RS: 1500","wom.jpg");
          // component("Kids Clothes","RS: 2000","k.jpg");
          // component("Watches","RS: 5000","wa.jpg");
          // 
          $result = $database->getData();
          while($row = mysqli_fetch_assoc($result)){
            component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
          }
          
          ?>

<!-- <div class="new">
    <div class="heading">
        <h1> Grocery Products </h1>
    </div>
    <div class="container">
        <div class="row"> -->
        
          <!-- <?php 
          // component("Jazaa Fried Onion - 400g","RS:153","chawal.jpg");
          // component("Jazaa Premium Basmati Rice - 1kg","RS: 216","Basmati.jpg");
          // component("Mezan Cooking Oil Stand up Pouch Carton","RS: 1,320","Mezan.jpg");
          // component("Ahmed Ginger Paste","RS: 180","past.jpg");

          // $result = $database->getData();
          // while($row = mysqli_fetch_assoc($result)){
          //   component($row['product_name'],$row['product_price'],$row['product_image']);
          // }
          
          // ?>-->
          <!-- </div>
</div>
</div> -->








            <!-- <div class="col-sm12 col-md-6 col-lg-3">
            
            <form action="HOM.php" method="post">

            <div class="card0">
                    <img src="m.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Men Shirt</h5>
                      <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>


                      </h6>
                      <p class="card-text">RS: 1,000</p> -->
                      <!-- <a href="#" class="btn btn-primary">Add Card</a> -->
                      <!-- <button type="submit" class="btn btn-primary my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                    </div>
                  </div>



              </form> -->
              <!--                                                       -->
                
            <!-- </div>
</div>
</div> -->




            <!-- <div class="col-sm12 col-md-6 col-lg-3">

            <form action="HOM.php" method="post">
              
              <div class="card0">
                <img src="https://cdn11.bigcommerce.com/s-pkla4xn3/images/stencil/1280x1280/products/13691/135717/New-Autumn-2018-Womens-Tops-and-Blouses-Long-Sleeve-Chiffon-Blouse-Ladies-Tops-Women-Shirts-Shirt__18616.1544088779.jpg?c=2&imbypass=on" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Women Clothes</h5>
                  <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        
                        <i class="far fa-star"></i>


                      </h6>
                  <p class="card-text">RS: 1,500</p> -->
                  <!-- <a href="#" class="btn btn-primary">Add Card</a> -->
                  <!-- <button type="submit" class="btn btn-primary my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>


                </div>
              </div>
</form>
            </div> -->








            <!-- <div class="col-sm12 col-md-6 col-lg-3">
            <form action="HOM.php" method="post">
            <div class="card0">
                <img src="k.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Kid Clothes</h5>

                  <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>


                      </h6>
                  <p class="card-text">RS: 2,000</p> -->
                  <!-- <a href="#" class="btn btn-primary">Add Card</a> -->
                  <!-- <button type="submit" class="btn btn-primary my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>

                </div>
              </div>
</form>
            </div> -->



            <!-- <div class="col-sm12 col-md-6 col-lg-3">
            <form action="HOM.php" method="post">
            <div class="card0">
                <img src="https://ae01.alicdn.com/kf/HTB1DZuvKrSYBuNjSspfq6AZCpXa3/LIGE-Mens-Watches-Top-Brand-Luxury-Automatic-Mechanical-Watch-Men-Business-Full-Steel-Waterproof-Sport-Wrist.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Watches</h5>
                  <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>


                      </h6>
                  <p class="card-text">RS: 5,000</p> -->
                  <!-- <a href="#" class="btn btn-primary">Add Card</a> -->
                  <!-- <button type="submit" class="btn btn-primary my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>

                </div>
              </div>
</form>
            </div> -->

        <!-- </div>

    </div>

</div>

<div class="new">
    <div class="heading">
        <h1> Grocery Products </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm12 col-md-6 col-lg-3">
            <form action="HOM.php" method="post">
                <div class="card0">
                    <img src="chawal.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Jazaa Fried Onion - 400g</h5>
                      <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>


                      </h6>

                      <p class="card-text">RS: 153</p> -->
                      <!-- <a href="#" class="btn btn-primary">Add Card</a> -->
                      <!-- <button type="submit" class="btn btn-primary my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>

                    </div>
                  </div>
</form>
            </div> -->


            <!-- <div class="col-sm12 col-md-6 col-lg-3">
            <form action="HOM.php" method="post">
            <div class="card0">
                <img src="Basmati.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Jazaa Premium Basmati Rice - 1kg
                    </h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>


                      </h6>

                  <p class="card-text">RS: 216</p> -->
                  <!-- <a href="#" class="btn btn-primary">Add Card</a> -->
                  <!-- <button type="submit" class="btn btn-primary my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>

                </div>
              </div>
</form>
            </div>

            <div class="col-sm12 col-md-6 col-lg-3">
            <form action="HOM.php" method="post">  
            <div class="card0">
                <img src="Mezan.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mezan Cooking Oil Stand up Pouch Carton</h5>
                  <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>


                      </h6>
                  <p class="card-text">RS: 1,320</p> -->
                  <!-- <a href="#" class="btn btn-primary">Add Card</a> -->
                  <!-- <button type="submit" class="btn btn-primary my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>

                </div>
              </div>
</form>
            </div>
            <div class="col-sm12 col-md-6 col-lg-3">
            <form action="HOM.php" method="post">  
            <div class="card0">
                <img src="past.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ahmed Ginger Paste <br> 320gm</h5>
                  <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>


                      </h6>
                  <p class="card-text">RS: 180</p> -->
                  <!-- <a href="#" class="btn btn-primary">Add Card</a> -->
                  <!-- <button type="submit" class="btn btn-primary my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>

                </div>
              </div>
</form>
            </div> -->

        </div>
<div>
  <a href="#para1"> <img class="icon" width="5%" src="https://cdn0.iconfinder.com/data/icons/flat-round-arrow-arrow-head/512/Red_Arrow_Head_Top-2-512.png" ></a>

</div>

    </div>

</div>

<!-- prodct section Complete -->


<div class="foo">
    <di>
        <h4>Copyright <i class="fa fa-copyright" aria-hidden="true"></i> Muhammad Hasan Ali 2020
        </h4>
        <a href="#contact"></a>
    </di>
</div>




























    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>