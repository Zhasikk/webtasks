<!DOCTYPE html>
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
<html>
    <link rel="stylesheet" href="buystyle.css">
    <script src="homescript.js" defer></script>
  <body>
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
          <button class="upb">sigh up</button>
        </div>
        <div class="header sighin">
          <button class="inb">sigh in</button>
        </div>
    </div>

    <div class="content">
      <div class="card">
        <div class="cardtext">
        <a href="item1.html" class="link"><h2>Mercedes-Benz E345</h2></a>
        <p>Charity is the act of helping the needy by providing them with sources that can be useful for them. It can be food, clothing, shelter, education, money or anything else that can be of aid to them. Charity is one of the most generous acts. The greatest thing about charity is that it doesn’t always need to be big. It is undefined. Every person is free to perform the act of philanthropy as per his wishes. Even the slightest act of philanthropy has the same regard as any other bigger act. But it is one of the toughest tasks to do. It requires altruism, thoughtfulness and empathy. These are the kindest virtues of a man. To attain them is difficult. But if a man assumes his obligations, learns about his role to humanity and realizes how lucky he is to have what he has, he can easily be motivated to perform charity. Every religion, be it Sikhism, Hinduism, Islam, Christianity, or other, mentions charity as an essential act of mankind in its holy books. For instance, the Hindu belief of “Karma”, that ensures a man must do good deeds, and the Sikh practice of Langar, that believes in feeding people for free, reflect how religion has always been associated with Charity. All one needs to be charitable is motivation and understanding to work for the betterment of others. And most importantly, to do charity one needs a vision to identify why to do charity?
        </p>
        <div class="endtext">
        <h3>$789650</h3><p class="phone"> Kairat: +7-775-731-36-88 </p>
        </div>
        </div>
        <img class="forcard" src="https://s-media-cache-ak0.pinimg.com/564x/6f/57/70/6f57708bf373a1d46d24f2c07752a32a.jpg">
      </div>
      <div class="card">
        <div class="cardtext">
        <h2>Ford Mustang</h2>
        <p>Charity is the act of helping the needy by providing them with sources that can be useful for them. It can be food, clothing, shelter, education, money or anything else that can be of aid to them. Charity is one of the most generous acts. The greatest thing about charity is that it doesn’t always need to be big. It is undefined. Every person is free to perform the act of philanthropy as per his wishes. Even the slightest act of philanthropy has the same regard as any other bigger he kindest virtues of a man. To attain them is difficult. But if a man assumes his obligations, learns about his role to humanity and realizes how lucky he is to have what he has, he can easily be motivated to perform charity. Every religion, be it Sikhism, Hinduism, Islam, Christianity, or other, mentions charity as an essential act of mankind in its holy books.  to be charitable is motivation and understanding to work for, to do charity one needs a vision to identify why to do charity?
        </p>
        <div class="endtext">
        <h3>$789650</h3><p class="phone"> Kairat: +7-775-731-36-88 </p>
        </div>
        </div>
        <img class="forcard" src="http://www.finest-classiccars.com/wp-content/uploads/2015/10/1369-5-2.jpg">
      </div>
      <div class="card">
        <div class="cardtext">
        <h2>Ford Birdenke</h2>
        <p>Charity is the act of helping the needy by providing them with sources that can be useful for them. It can be food, clothing, shelter, education, money or anything else that can be of aid to them. Charity is one of the most generous acts. The greatest thing about charity is that it doesn’t always need to be big. It is undefined. Every person is free to perform the act of philanthropy as per his wishes. Even the slightest act of philanthropy has the same regard as any other bigger act. But it is one of the toughest tasks to do. It requires altruism, thoughtfulness and empathy. These are the kindest virtues of a man. To attain them is difficult. But if a man assumes his obligations, learns about his role to humanity and realizes how lucky he is to have what he has, he can easily be motivated to perform charity. Every religion, be it Sikhism, Hinduism, Islam, Christianity, or other, mentions charity as an essential act of mankind in its holy books. For instance, the Hindu belief of “Karma”, that ensures a man must do good deeds, and the Sikh practice of Langar, that believes in feeding people for free, reflect how religion has always been associated with Charity. All one needs to be charitable is motivation and understanding to work for the betterment of others. And most importantly, to do charity one needs a vision to identify why to do charity?
          philanthropy as per his wishes. Even the slightest act of philanthropy has the same regard as any other bigger act. But it is one of the toughest tasks to do. It requires altruism, thoughtfulness and empathy. These are the kindest virtues of a man. To attain them is difficult. But if a man assumes his obligations, learns about his role to humanity and realizes how lucky he is to have what he has, he can easily be motivated to perform charity. Every religion, be it Sikhism, Hinduism, Islam, Christianity, or other, mentions charity as an essential act of mankind in its holy books. For instance, the Hindu belief of “Karma”, that ensures a man must do good deeds, and the Sikh practice of Langar, that believes in feeding people for free, reflect how religion has always been associated with Charity. All one needs to be charitable is motivation and understanding to work for the betterment of others. And most importantly, to do charity one needs a vision to identify why to do charity?
        </p>
        <div class="endtext">
        <h3>$789650</h3><p class="phone"> Kairat: +7-775-731-36-88 </p>
        </div>
        </div>
        <img class="forcard" src="http://viaa4u.com/wp-content/uploads/2016/03/Classic-Cars-Wallpapers-268-Justlern.jpg">
      </div>
      <div class="card">
        <div class="cardtext">
        <h2>Mercedes-Benz E345</h2>
        <p>the Sikh practice of Langar, that believes in feeding people for free, reflect how religion has always been associated with Charity. All one needs to be charitable is motivation and understanding to work for the betterment of others. And most importantly, to do charity one needs a vision to identify why to do charity?
        </p>
        <div class="endtext">
        <h3>$789650</h3><p class="phone"> Kairat: +7-775-731-36-88 </p>
        </div>
        </div>
        <img class="forcard" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQWn6xmjXeu-QA0aeBpx2MguvkRBVj-kL8VMUwoqFmkKAuYjFb-w">
      </div>
      <div class="card">
        <div class="cardtext">
        <h2>Mercedes-Benz E345</h2>
        <p>Charity is the act of helping the needy by providing them with sources that can be useful for them. It can be food, clothing, shelter, education, money or anything else that can be of aid to them. Charity is one of the most generous acts. The greatest thing about charity is that it doesn’t always need to be big. It is undefined. Every person is free to perform the act of philanthropy as per his wishes. Even the slightest act of philanthropy has the same regard as any other bigger act. But it is one of the toughest tasks to do. It requires altruism, thoughtfulness and empathy. These are the kindest virtues of a man. To attain them is difficult. But if a man assumes his obligations, learns about his role to humanity and realizes how lucky he is to have what he has, he can easily be motivated to perform charity. Every religion, be it Sikhism, Hinduism, Islam, Christianity, or other, mentions charity as an essential act of mankind in its holy books. For instance, the Hindu belief of “Karma”, that ensures a man must do good deeds, and the Sikh practice of Langar, that believes in feeding people for free, reflect how religion has always been associated with Charity. All one needs to be charitable is motivation and understanding to work for the betterment of others. And most importantly, to do charity one needs a vision to identify why to do charity?
        </p>
        <div class="endtext">
        <h3>$789650</h3><p class="phone"> Kairat: +7-775-731-36-88 </p>
        </div>
        </div>
        <img class="forcard" src="https://media.wired.com/photos/59266cf87034dc5f91beb600/master/w_2400,c_limit/1954-Mercedes-Benz-300-SL-Gullwing_Darin-Schnabel-c-2016-Courtesy-RM-Sothebys.jpg">
      </div>
    </div>

    <div class="footer">
      <p>Kaskelen 2017</p>
    </div>
  </body>
  </html>
