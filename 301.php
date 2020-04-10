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
          background:url(301.jpg);
          background-repeat: no-repeat;
          background-size: cover;

      }
      .menu:hover{
        background: transparent;
   }
    </style>

</head>
<body>
<div class="foot">
  <div class="about-section">
  <h1></h1>
  </div>
    <div class="container">
  <img src="1s.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>Barry Allen is a Central City police forensic scientist with a reasonably happy life, despite the childhood trauma of a mysterious red and yellow lightning killing his mother and framing his father. All that changes when a massive particle accelerator accident leads to Barry being struck by lightning in his lab.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: D'Panbaker</li>
    <li>Actors: Grant Gustin, Candice Patton, Danielle Panabaker, Carlos Valdes, Tom Cavanagh, Jesse L. Martin</li>
    <li>Release Date: 2014-10-07</li>
    <li>Genres: Action, Adventure, Drama, Sci-Fi</li>
    <li>Language: English</li>
  </ul>
  </dir>
  <div class="sub">
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 1</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 2</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">ALL Episodes</option>
    </select>
       <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 1</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 2</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">ALL Episodes</option>
    </select>
     <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 1</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 6</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 1</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 2</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 3</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 4</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 5</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 6</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 7</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 8</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 9</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 10</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 11</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 12</option>
    <option class="op" value="http://reqlinks.net/nYgOnGX">Episode 13</option>

    </select>
  
  </div>

</body>


</body>
</html>
<?php
include 'footer.php';
?>