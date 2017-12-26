<?php include "includes/db.php";
	if (!isset($_COOKIE['userid'])){
		header("Location: http://localhost/");
		exit;
	}
	$q = mysqli_query($connection,"SELECT * FROM `users` WHERE `id` = '".$_COOKIE['userid']."'");
	$user = mysqli_fetch_assoc($q);
	if ($user['access_level']==1){
		header("Location: http://localhost/");
		exit;
	} ?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="homestyle.css">
    <script src="homescript.js" defer></script>
  <body>

    <div class="opop" id="op">
    <div class="hidde" id="myy">
      <input type="text" id="loginname">Login
      <input type="password" id="loginpassword">Password
      <input type="submit" id="loginsubmit">
    </div>
    </div>

    <div class="opop" id="opo">
    <div class="hidd" id="my">
      <input type="text" id="loginnam">Login
      <input type="password" id="loginpasswor">Password
      <input type="password" id="loginpasswor">Repeat Password
      <input type="text" id="loginnam">Name
      <input type="text" id="loginnam">Surname
      <input type="submit" id="loginsubmi">
    </div>
    </div>

    <div class="header">
      <div class="header image">
        <img class="icon"src="http://booksmartapp.com/booksmartapp/img/money_icon.png">
      </div>
      <div class="header cat">
        <div class="header home">
          <p><a href="home.html">Home</a></p>
        </div>
        <div class="header buy">
          <p><a href="buy.html">Buy</a></p>
        </div>
        <div class="header sell">
          <p><a href="sell.html">Sell</a></p>
        </div>
        <div class="header profile">
          <p><a href="profile.html">Profile</a></p>
        </div>
      </div>
        <div class="header sighup">
          <button class="upb" id="reg" >sigh up</button>
        </div>
        <div class="header sighin">
          <button class="inb" id="log" >sigh in</button>
        </div>
    </div>

    <div class="container">
      <div class="formainphoto">
        <div class="slideshow-container">

         <div class="mySlides fade">
           <img src="https://si.wsj.net/public/resources/images/BN-DK146_0624ca_HD_20140624164809.jpg" style="width:100%">
         </div>

         <div class="mySlides fade">
           <img src="http://musclecarsofaustin.com/wp-content/uploads/2016/07/slide5-1-1024x640.jpg" style="width:100%">
         </div>

         <div class="mySlides fade">
           <img src="http://pinxcars.com/wp-content/uploads/2013/12/carsoldcarsclassiccarshdwallpapers-13876940588kgn4-1024x640.jpg" style="width:100%">
         </div>

         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
         <a class="next" onclick="plusSlides(1)">&#10095;</a>

         </div>
         <br>

         <div style="text-align:center">
           <span class="dot" onclick="currentSlide(1)"></span>
           <span class="dot" onclick="currentSlide(2)"></span>
           <span class="dot" onclick="currentSlide(3)"></span>
         </div>
             </div>
               <div class="content">
        <h1>Sell your car and do good work</h1>
        <div class="fortext">
          <p class="contenttext">Charity is the act of helping the needy by providing them with sources that can be useful for them. It can be food, clothing, shelter, education, money or anything else that can be of aid to them. Charity is one of the most generous acts. The greatest thing about charity is that it doesn’t always need to be big. It is undefined. Every person is free to perform the act of philanthropy as per his wishes. Even the slightest act of philanthropy has the same regard as any other bigger act. But it is one of the toughest tasks to do. It requires altruism, thoughtfulness and empathy. These are the kindest virtues of a man. To attain them is difficult. But if a man assumes his obligations, learns about his role to humanity and realizes how lucky he is to have what he has, he can easily be motivated to perform charity. Every religion, be it Sikhism, Hinduism, Islam, Christianity, or other, mentions charity as an essential act of mankind in its holy books. For instance, the Hindu belief of “Karma”, that ensures a man must do good deeds, and the Sikh practice of Langar, that believes in feeding people for free, reflect how religion has always been associated with Charity. All one needs to be charitable is motivation and understanding to work for the betterment of others. And most importantly, to do charity one needs a vision to identify why to do charity?
          </p>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Kaskelen 2017</p>
    </div>
    <script>

    function signup(){
      document.querySelector("#my").className="mainreg";
      let y=document.querySelector("#opo");
      y.className="opac";
    }

    function signin(){
      let x=document.querySelector("#myy");
      x.className="mainlog";
      let y=document.querySelector("#op");
      y.className="opac";
    }

    function out(){
      let x=document.querySelector("#myy");
      x.className="hidde";
      let y=document.querySelector("#op");
      y.className="opop";
    }
    function ou(){
      let x=document.querySelector("#my");
      x.className="hidd";
      let y=document.querySelector("#opo");
      y.className="opop";
    }

    document.querySelector("#log").addEventListener("click",signin);
    document.querySelector("#loginsubmit").addEventListener("click",out);
    document.querySelector("#loginsubmi").addEventListener("click",ou);
    document.querySelector("#reg").addEventListener("click",signup);


      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      }
</script>
  </body>

</html>
