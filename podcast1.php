<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast | BUSINESS PODCAST</title>
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
                    <a href="podcast3.php">The Gary</a>
                    </div>
                  </div>
             </li>
          </ul> 
    </header>

    <div class="the-3-PODCASTS">

        <div>
            <img class="images1" src="img/brian.jpg">
            
        </div>
        <div style="font-size: 20px;" class="description">
            <H1>BUSINESS PODCAST</H1>
            <p>
                The business podcast for personal trainers and anyone working in the health and fitness industry. <br>
                Hosted by Fitness Entrepreneur and Business Consultant Brian Keane
            </p>
            
        </div>
        
    </div>
   <center> <div style="background-color: #43086d; height: 2px; width: 400px; margin-top: 100px;" class="line"></div> </center>
    
   <center> <div> <h1 style="color: #43086d; margin-top: 90px;">EPISODE DESCRIPTION</h1></div> </center>
   <div Id="result">
  '<center><p class="text-ourpodcasts"> #1: Using Social Media To Build Your Business, What Price To Charge and Time Management </p></center> 
    <div><center><p style="color: black; margin-top: 80px;" class="epdesc">
        As today’s the first episode, I’ve jumped around on several different topics.

        I've talked about how to use social media to build your personal or business brand alongside leveraging it for more leads in a 1:1 or online business.
        
        I've also gone into how to price your services so you're priced based on on the value you provide and not on the 'commodity/everybody charges that' idea that a lot of trainers adopt. not priced as a commodity.
        
        Finally I've covered the difference between being productive (getting a lot of things done) with being busy (having a lot of things to do). I hope you enjoy it. <br>
        Category: Business / fitness <br>
        Guests:N/A <br>
        
<!-- episode-->

    
    </p></center></div>

    <div class="audio-episodes">
        
        <button onclick="Prev()"> <i class="fas fa-chevron-left"></i></button>
        <audio controls src="https://traffic.libsyn.com/secure/briankeanebusiness/Business_Podcast_1.mp3?dest-id=970568"></audio>
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
              <input name='' type="text" id="Ename"  placeholder="Episode name.." >

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


  <script src="js/script1.js"></script>  
</body>
</html>