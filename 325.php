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
          background:url(325.jpg);
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
  <img src="25s.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>The series is set 97 years after a devastating nuclear war wiped out almost all life on Earth. The only known survivors are the residents of twelve space stations in Earth’s orbit prior to the war. The space stations banded together to form a single massive station named “The Ark”, wenis galore about 2,400 people live</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Steven Knight</li>
    <li>Actors:  Penn Badgley, Elizabeth Lail, Luca Padovan, Zach Cherry, Nicole Kang, Kathryn Gallagher, Daniel Cosgrove, Shay Mitchell, Victoria Cartagena
</li>
    <li>Release Date: 2018-11-01</li>
    <li>Genres: Action, Drama, Sci-Fi
</li>
    <li>Language: English</li>
  </ul>
  </dir>
  <div class="sub">
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 1</option>
    <option class="op" value="http://reqzone.com">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 2</option>
    <option class="op" value="http://reqzone.com">All Episodes</option>
    </select>
       <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 3</option>
    <option class="op" value="http://reqzone.com">All Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 4</option>
    <option class="op" value="http://reqzone.com">All Episodes</option>
    </select>
 
  </div>

</body>


</body>
</html>
<?php
include 'footer.php';
?>