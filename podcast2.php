<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast | The Mfceo project</title>
    <link rel="stylesheet" href="css/ccss.css">
    <script src="https://kit.fontawesome.com/5fdbe7144b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="icon" href="img/logo.png" type="image/png">
</head>
<body>
    <!-- header-->
    <header>
        
        <ul class="menu">
            <li><a href="index.html">HOME</a></li>
            <li> <a href="index.html" ><img class="logo"src="img/logo.png" alt=""> </a> </li>

                <div class="dropdown">
                    <a class="dropbtn">PODCASTS</a>
                    <div class="dropdown-content">
                    <a href="podcast1.php">BUSINESS PODCAST</a>
                    <a href="podcast2.php">The Mfceo project</a>
                    <a href="podcast3.php">The GaryVee</a>
                    </div>
                  </div>
             </li>
          </ul> 
    </header>
    <div class="the-3-PODCASTS">

        <div>
            <img  class="images1" src="img/mfceo.jpg">
            
        </div>
        <div style="font-size: 20px;" class="description">
            <H1>The Mfceo project</H1>
            <p>
                The MFCEO is a highly successful entrepreneur, top-ranked podcast host,<br>
and speaker who leads the #100to0 movement — men and women of integrity and intensity who want to win big at business and life.
            </p>
            
        </div>
        
    </div>
   <center> <div style="background-color: #43086d; height: 2px; width: 400px; margin-top: 100px;" class="line"></div> </center>
    
   <center> <div> <h1 style="color: #43086d; margin-top: 90px;">EPISODE DESCRIPTION</h1></div> </center>
   <div Id="result1">
  <center><p class="text-ourpodcasts"> The End, with Andy Frisella - MFCEO318 </p></center> 
    <div><center><p style="color: black; margin-top: 80px;" class="epdesc">
        And now...the final episode of The MFCEO Project podcast (which, by the way, has language and adult humor that is not suitable for kids. Use your brains. Be a good parent.)<br>
        Category: Business / Self development <br>
        Guests:N/A <br>
        


    
    </p></center></div>

    <div class="audio-episodes">
        
        <button onclick="Prev()"> <i class="fas fa-chevron-left"></i></button>
        <audio controls src="https://chtbl.com/track/24EG4/traffic.libsyn.com/secure/mfceoproject/Ep_1_-_12.4.19_Audio.mp3"></audio>
        <button onclick="Next()"><i class="fas fa-chevron-right"></i></button>
        
        
       
    </div>'
</div>

    <div class="add">
        <img src="img/add.png" alt="">
        <div>
        <p class="text-ourpodcasts"> ADD AN EPISODE </p>
       <center><div class="line"></div></center>
        </div>

    </div>


    <div class="form-container">
        <div class="form">
            <form >
              <label>Episode name :</label>
              <input type="text" id="Ename"  placeholder="Episode name.." >

              <label>Category :</label>
              <input type="text" id="categ"  placeholder="Category.."  >
          
              <label>Guests :</label>
              <input type="text" id="guest"  placeholder="Guests.."  >
          

              <label>Episode link :</label>

              <input type="text" id="eplink"  placeholder="Episode link.." >

              <label>Episode description :</label>
              <textarea placeholder="Episode description.." id="epdesc"></textarea>
              
            
             <center> <input type="button" value="ADD" onclick="empiler()"> </center>
            </form>
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


  <script src="js/script2.js"></script>  
</body>
</html>