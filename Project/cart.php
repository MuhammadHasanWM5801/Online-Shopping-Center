<?php


if(!isset ($_SESSION['username'])){
    header('loction:login.php');
}
?>


<?php


session_start();

require_once("CreateDb.php");
require_once("component.php");

$db = new CreateDb("Productsdb","Productstb");

if(isset($_POST['remove'])){
    if($_GET['action']=='remove'){
        foreach($_SESSION['cart'] as $key =>$value){
            if($value['product_id']== $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo"<script>alert(\"Product Has been Remove..!\")</script>";
                echo"<script>window.location=\"cart.php\"</script>";
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="car.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  
</head>
<body class="bg-light">

<?php
require_once('header.php');


?>


<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h3><u>"<?php echo $_SESSION['username']; ?>'s'" PURCASHING PRODUCT DETAILS AND PRICES ARE:</u></h3>
                <hr>





                <?php
                $total=0;
               if(isset($_SESSION['cart'])){
                $product_id= array_column($_SESSION['cart'],'product_id');


                $result= $db->getData();
                    while($row = mysqli_fetch_assoc($result)){
                    foreach($product_id as $id){
                        if($row['id']== $id){
                            cartElement($row['product_image'],$row['product_name'],$row['product_price'],$row['id']);
                        $total = $total +(int) $row['product_price'];
                        }
                    }
                }
                }else{
                    echo "<h5>Cart is Empty:</h5>";
                }
               




                ?>
                <!-- <form action="cart.php" method="get" class="cart-items">
                        <div class="border rounded">
                            <div class="row bg-white">
                                <div class="col-md-3 pl-0">
                                    <img src="m.jpg" alt="image1" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="pt-2">Men Shirts</h5>
                                    <small class="text-secondary">Seller: E-Shopping</small>
                                    <h5 class="pt-2">RS:1000</h5>
                                    <button type="submit" class="btn btn-warning ">Save</button>
                                    <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>

                                </div>
                                <div class="col-md-3 py-5">
                                    <div>
                                        <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus"></i></button>
                                        <input type="text" value="1" class="form-control w-25 d-inline">
                                        <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus"></i></button>

                                    </div>
                                </div>
                            </div>

                        </div>



                </form> -->
            </div>
        </div>
            
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                
                <div class="pt-4">

                <h6>
                    PRICE DETAILS
                </h6>
                <hr>
                <div class="row price-deatils">
                    <div class="col md-6">
                        <?php

                        if(isset($_SESSION['cart'])){
                            $count =count($_SESSION['cart']);
                            echo "<h6>Price($count items)</h6>";
                        }else{
                            echo "<h6>Price(0 items)</h6>";
                        }


?>


                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                    </div>
                    <div class="col md-6">
                        <h6>
                            <?php
                            echo $total;
                            ?>
                        </h6>
                        <h6 class="text-primary">Free</h6>
                        <hr>
                        <h6>
                            RS:<?php
                            echo $total;
                            ?>
                            <h6>

                    </div>

                </div>
                </div>
        
        
        
        
        
        
        
        
        </div>


            

       

    </div>




</div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>