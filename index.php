<?php 
	include('functions.php');


?>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast | HOME</title>
    <link rel="stylesheet" href="css/ccss.css">
    <script src="https://kit.fontawesome.com/5fdbe7144b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link rel="icon" href="img/logo.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

    <header>
        
        <ul class="menu">
            <li><a href="index.php">HOME</a></li>
            <li> <a href="index.php" ><img class="logo"src="img/logo.png" alt=""> </a> </li>

                <div class="dropdown">
                    <a href="login.php" class="dropbtn">login</a>
                    
                  </div>
             </li>
          </ul> 
    </header>
    <!-- count -->
    <div class="count">
     <img class="imagescount" src="img/image-asset.gif">
     <p class="text-ourpodcasts"> OUR PODCASTS </p>
     <center><div class="line"></div></center> 
     
    </div>
    <!-- the -3-podcasts in our site  -->
    <div class="the-3-PODCASTS" id="the-3-PODCASTS">

        <div class="images">
           <a><img src="img/brian.jpg"></a>
            <h1>BUSINESS PODCAST</h1> 
            <h3> by: Brian KEANE</h3>
            <h3>Category : Business/Fitness </h3>
        </div>
        <div class="images">
            <a ><img  src="img/garyvee.jpg"></a>
            <h1> AUDIO EXPERIENCE </h1> 
            <h3>by: Gary Vaynerchuk </h3>
            <h3> Category : Business</h3>
        </div>
        <div class="images">
           <a > <img src="img/mfceo.jpg"> </a>
            <h1> THE MFCEO PROJECT</h1> 
            <h3> by: Andy Frisella</h3>
            <h3> Category : Business</h3>
        </div>
    </div>
 <!-- footer -->
 <footer>
    <h3>Powered by : </h3>
    <h2>YouCode Students</h2>
    <div>
        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/?hl=fr"><i class="fab fa-instagram"></i></a>
    </div>
    <p>© 2020 Copyright YouCode Studios, All rights reserved.</p>
</footer>


  <script src="js/script.js"></script>  
</body>
</html>