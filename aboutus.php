<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image: url(bg.jpg);
}
p{
  font-weight: italic ;
  font-size: 15px;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
.row{
  margin-left: 5px;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;

}
.our{
  color: white;
  background-color: transparent;
  text-align: center;
  width: 300px;
  align-items:  center;
  margin-bottom: 50px;
  

} 
.our h1{
  font-weight: 600;
  font-size: 60px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  
  margin: 10px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: transparent;
  color: white;
}

.container {
  padding:  16px;
  background-color: transparent;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  padding-left: 0px;
  margin-left: 0;
  left: 0;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
ul
{
  
  left: 0px;
 
}

.container ul li{
  color: blue;
}

.button:hover {
  background-color: #555;
}
img{
  width: 100%;
  min-height: 500px;
  max-height: 500px;
}
.socials a{
  border: 1px solid gray;
  width: 45px;
  height: 41px;
  padding-top: 5px;
  margin-right: 5px;
  text-align: center;
  display: inline-block;
  font-size: 1.3em;
  border-radius: 5px;
  transition: all .3s;
  color: grey;  
  text-align: center;
  margin-bottom: 20px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
  img{
    max-height: 500px;
    min-height: 500px;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p>MyFavShow is currently the most popular website. you can Download movies and TV shows for free wherever you are. The website gives you access to countless movies and TV shows at no charge.</p>
  <p>We do not host any videos on www.myfavshow.com, www.myfavshow.com is absolutely legal and contains only links to other third party sites like Youtube, Uptobox, Mediafire. www.myfavshow.com is not responsible for the compliance, copyright, legality, decency, or any other aspect of the content of other linked sites. If you have any legal issues please contact the appropriate media file owners or linked hosting websites. None of the files listed in this website are hosted on our server. All the files are hosted on external file hosts.</p>
  <p>
    Copyrighted Contents???
What to do if I want you to remove certain copyrighted comments from your website?
Please note that we do not host any copyrighted content on this website. The comments (text) contains only information shared by users that do not contain data that might be copyrighted in any way. However, we offer a service to remove comments from our website if the copyright holder of the content requests so. These removal requests are only valid if:
  </p>
  <p>As a website we strongly recommend our users to support the makers of the movies and buy the shows and movies that they like!</p>
</div>
  <center>
    <div class="our">
  <h1>Our Team</h1>
    </div>
</center>

<div class="row">
  <div class="column">
        <div class="card">
      <img src="santosh.jpg" alt="Prashanth" >
      <div class="container">
        <h2>Sai Santosh</h2>
        <p class="title">Developer</p>
        <p><ul>
          <li style="list-style-type: none"><i class="fa fa-id-badge" aria-hidden="true"></i> &nbsp; 11705247</li>
          
          <li style="list-style-type: none"><i class="fas fa-phone"></i> &nbsp; +91 9550617891</li>
          
          <li style="list-style-type: none"><i class="fas fa-envelope"></i> &nbsp; saisantosh2610@hotmail.com</li>
          <li style="list-style-type: none"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Hyderabad</li>
          
          </ul>
          <div class="socials" align="center">
          <a href="https://www.facebook.com/sai.santosh.752?ref=bookmarks"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/santosh__dawre/"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/saisantosh242"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/channel/UCB7jJuUhhu0-5jAFFbj2BXg"><i class="fab fa-youtube"></i></a>
          
          </div>
        <p><button class="button">Contact</button></p>
      </div>
    </div>


  </div>

  <div class="column">
    <div class="card">
      <img src="Prashanth.jpg" alt="Prashanth" >
      <div class="container">
        <h2>Prashanth</h2>
        <p class="title">Developer</p>
        <p><ul>
          <li style="list-style-type: none"><i class="fa fa-id-badge" aria-hidden="true"></i> &nbsp; 11704203</li>
          
          <li style="list-style-type: none"><i class="fas fa-phone"></i> &nbsp; +91 7032042900</li>
          
          <li style="list-style-type: none"><i class="fas fa-envelope"></i> &nbsp; prashant.chubby@gmail.com</li>
          <li style="list-style-type: none"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Hyderabad</li>
          </ul>
          <div class="socials" align="center">
          <a href="https://www.facebook.com/sai.santosh.752?ref=bookmarks"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/santosh__dawre/"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/saisantosh242"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/channel/UCB7jJuUhhu0-5jAFFbj2BXg"><i class="fab fa-youtube"></i></a>
          
          </div>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
            <div class="card">
      <img src="vinay.jpg" alt="Prashanth" >
      <div class="container">
        <h2>Vinay</h2>
        <p class="title">Developer</p>
        <p><ul>
          <li style="list-style-type: none"><i class="fa fa-id-badge" aria-hidden="true"></i> &nbsp; 11602309</li>
          
          <li style="list-style-type: none"><i class="fas fa-phone"></i> &nbsp; +91 9177625514</li>
          
          <li style="list-style-type: none"><i class="fas fa-envelope"></i> &nbsp; Vinaychowdarynalamati@gmail.com</li>
          <li style="list-style-type: none"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Tirupati</li>
          </ul>
          <div class="socials" align="center">
          <a href="https://www.facebook.com/sai.santosh.752?ref=bookmarks"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/santosh__dawre/"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/saisantosh242"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/channel/UCB7jJuUhhu0-5jAFFbj2BXg"><i class="fab fa-youtube"></i></a>
          
          </div>
        <p><button class="button">Contact</button></p>
      </div>
    </div>

  </div>
</div>

</body>


</html>
<?php include 'footer.php'; ?>
