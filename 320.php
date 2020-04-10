<?php 
include 'header.php'
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Monoton&family=Playball&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="down.css">
    <style type="text/css">
      .about-section {
          padding: 250px;
          text-align: center;
          background:url(320.jpg);
          background-repeat: no-repeat;
          background-size: cover;

      }
      .menu:hover{
        background: transparent;
        
        
        
      }
    .menu{
      overflow: auto;
    }

     
    .menu .op{
     
      color: black;
      margin-top: inherit;
      min-height: 50px;
      max-height: 50px;
      overflow: auto;
    }
    .menu .op:hover{
      min-height: 50px;
      max-height: 50px;
        overflow: auto;

       }
    .sub .menu:onclick {
      margin-bottom: 500px;

    }
    option{
      color: white;
      background-color: lightblue;
      line-height: 10px;
    }
    </style>

</head>
<body>
<div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="20s.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>Made In Heaven chronicles the lives of Tara and Karan, two wedding planners based in Delhi. India is a potent blend of old and new. Tradition jostles with modern aspirations against the backdrop of a Big Fat Indian Wedding revealing many secrets and many lies. The supposedly liberal fabric of the upper crust unravels as the duo navigate through arranged marriages, dowry transactions and virginity tests.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: </li>
    <li>Actors:Arjun Mathur, Sobhita Dhulipala, Jim Sarbh, Kalki Koechlin, Shashank Arora, Shivani Raghuvanshi, Zachary Coffin, Ivan Rodrigues, Natasha Singh, Manish Mishra, Vinay Pathak, Dalip Tahil, Sanjay Dadich, Krishnakali Ganguli, Natasha Rastogi, Yashaswini Dayama, Shalva Kinjawadekar, Manini M. Mishra, Ayesha Raza, Saket Sharma, Natasha Azad, Pravishi Das, Kashyap Kapoor, Preeti Mamgain, Sahil Mehta, Baljeet Kaur Nanda, Suchitra Pillai, Vijay Raaz, Hrishitaa Sharma, Satyajeet Sharma, Harman Singh 
</li>
    <li>Release Date: 2019-03-08</li>
    <li>Genres:  Drama, Romance
</li>
    <li>Language: Hindi, English</li>
  </ul>
  </dir>
  <div class="sub">
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 1</option>
    <option class="op" value="http://reqzone.com">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 2</option>
    <option class="op" value="http://">Comming Soon</option>
    </select>
       <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 3</option>
    <option class="op" value="http://">Comming Soon</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 4</option>
    <option class="op" value="http://">Comming Soon</option>
    </select>
 
  </div>

</body>


</body>
</html>
<?php
include 'footer.php';
?>