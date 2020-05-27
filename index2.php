 
<?php include('functions.php') ?>

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
</head>
<body>
    <!-- header-->
    <header>

        <ul class="menu">
            <li><a href="index2.php">home</a></li>
            <li> <a href="index2.php" ><img class="logo"src="img/logo.png" alt=""> </a> </li>


                <div class="dropdown">
                    </div>
                  </div>
                  <li> <a href="index2.php" ><img class="logo1"src="img/user_profile.png" alt=""> </a></li> 
                  <div class ="note">
                  <?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
                        <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                        <br>
                        <a href="profile.php" style="color: withe;">profil</a>
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>
                <?php endif ?>
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
           <a href="podcast1.php"><img src="img/brian.jpg"></a>
            <h1>BUSINESS PODCAST</h1> 
            <h3> by: Brian KEANE</h3>
            <h3>Category : Business/Fitness </h3>
        </div>
        <div class="images">
            <a href="podcast3.php"><img  src="img/garyvee.jpg"></a>
            <h1> AUDIO EXPERIENCE </h1> 
            <h3>by: Gary Vaynerchuk </h3>
            <h3> Category : Business</h3>
        </div>
        <div class="images">
           <a href="podcast2.php"> <img src="img/mfceo.jpg"> </a>
            <h1> THE MFCEO PROJECT</h1> 
            <h3> by: Andy Frisella</h3>
            <h3> Category : Business</h3>
        </div>
    </div>
        
        
        <!-- formuler -->
       
        <!-- <div class="add">
            <img src="img/add.png" alt="">
            <div>
            <p class="text-ourpodcasts"> ADD A PODCAST </p>
           <center><div class="line"></div></center> 
            </div> -->

        </div>
        <div class="form-container">
        <div class="form">
            <form >
              <label>Podcast name :</label>
              <input type="text" id="pname"  placeholder="Podcast name.." >
          
              <label>Podcaster name :</label>
              <input type="text" id="prname"  placeholder="Podcaster name.."  >
          
              <label>Category :</label>
              <input type="text" id="cat"  placeholder="Category.."  >

              <label>Image link :</label>
              <input type="text" id="imglink"  placeholder="Image link.." >
              
            
             <center> <input type="button" value="ADD" onclick="empiler()"> </center>
            </form>
          </div>
        </div>

        
         <!-- formuler -->



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