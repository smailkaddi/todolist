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
                    <a href="podcast3.php">The GaryVee</a>
                    </div>
                  </div>
             </li>
          </ul> 
    </header>
    <div class="the-3-PODCASTS">

        <div>
            <img  class="images1" src="img/garyvee.jpg">
            
        </div>
        <div style="font-size: 20px;" class="description">
            <H1>The GaryVee Audio Experience</H1>
            <p>
                Welcome to The Garyvee Audio Experience, hosted by entrepreneur, CEO, 
                 investor, vlogger, and public speaker Gary Vaynerchuk. On this podcast 
                  you'll find a mix of my #AskGaryVee show episodes, keynote speeches on 
                   marketing and business, segments from my WEEKLYVEE video series,
                    interviews and fireside chats I've given, as well as new and current thoughts 
                     I record originally for this audio experience!
            </p>
            
        </div>
        
    </div>
   <center> <div style="background-color: #43086d; height: 2px; width: 400px; margin-top: 100px;" class="line"></div> </center>
    
   <center> <div> <h1 style="color: #43086d; margin-top: 90px;">EPISODE DESCRIPTION</h1></div> </center>
   <div Id="result3">
  <center><p class="text-ourpodcasts"> #1:How I Knew We Were Dangerous </p></center> 
    <div><center><p style="color: black; margin-top: 80px;" class="epdesc">
        For today’s episode I sit down with David Griner, creative editor for AdWeek. We talk about VaynerMedia’s Super Bowl commercials and how I knew that we were dangerous. Make sure to hit me up and let me know what you thought!
        Category:Business / fitness <br>
        Guests:N/A <br>
        


    
    </p></center></div>

    <div class="audio-episodes">
        
        <button onclick="Prev()"> <i class="fas fa-chevron-left"></i></button>
        <audio controls src="https://anchor.fm/s/f39a864/podcast/play/10450176/https%3A%2F%2Fd3ctxlq1ktw2nl.cloudfront.net%2Fproduction%2F2020-1-18%2F50580627-44100-2-82b77c2715e44.mp3"></audio>
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
          
              <label>Episode link:</label>
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


  <script src="js/script3.js"></script>  
</body>
</html>