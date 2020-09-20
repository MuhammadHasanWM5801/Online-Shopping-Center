<?php

session_start();
if(!isset ($_SESSION['username'])){
    header('loction:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wellcome Page</title>
   
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="st.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
        <div class="cotainer">
            

        <!-- <a class="float-left" href="logout.php">Logout</a>

            <a class="float-right" href="logout.php">Logout</a> --> 
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
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">LOGOUT</a>
                </li>
                
          </span>
        </div>
      </nav>




        <h1 class="login-box">WELLCOME TO OUR E-SHOPPING CENTER: </br></br> " <u><?php echo $_SESSION['username']; ?></u> "</h1>

        <div> 
</body>
</html>






