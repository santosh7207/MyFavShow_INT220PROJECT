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
          background:url(332.jpg);
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
  <img src="32s.jpg">  
  </div>
  <div class="story">
  <h1><i class="fas fa-film" style="font-size: 45px; color:white"></i>    &nbsp; Storyline</h1>
 
  <p>In the mythical continent of Westeros, several powerful families fight for control of the Seven Kingdoms. As conflict erupts in the kingdoms of men, an ancient enemy rises once again to threaten them all. Meanwhile, the last heirs of a recently usurped dynasty plot to take back their homeland from across the Narrow Sea.</p>
  </div>


  <dir class="info">
    <center><h1>Movie Info</h1></center>
  <ul class="lis">
    <li>Director: Jeanie Finlay</li>
    <li>Actors: Peter Dinklage, Lena Headey, Emilia Clarke, Kit Harington, Sophie Turner, Maisie Williams, Nikolaj Coster-Waldau, Iain Glen, Alfie Allen, John Bradley, Aidan Gillen, Conleth Hill, Gwendoline Christie, Liam Cunningham, Isaac Hempstead Wright, Jerome Flynn, Nathalie Emmanuel, Rory McCann, Julian Glover, Ben Crompton, Daniel Portman, Carice van Houten, Kristofer Hivju, Jacob Anderson, Charles Dance, Natalie Dormer, Jack Gleeson, Michelle Fairley, Ian McElhinney</li>
    <li>Release Date: 2011-04-17 </li>
    <li>Genres: Action, Adventure, Drama, Fantasy, Romance</li>
    <li>English</li>
  </ul>
  </dir>
  <div class="sub">
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 1</option>
    <option class="op" value="https://reqzone.com/movie/game-of-thrones-the-last-watch/">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 2</option>
    <option class="op" value="https://reqzone.com/movie/game-of-thrones-the-last-watch/">ALL Episodes</option>
    </select>
       <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 3</option>
    <option class="op" value="https://reqzone.com/movie/game-of-thrones-the-last-watch/">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 4</option>
    <option class="op" value="https://reqzone.com/movie/game-of-thrones-the-last-watch/">ALL Episodes</option>
    </select>
     <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 5</option>
    <option class="op" value="https://reqzone.com/movie/game-of-thrones-the-last-watch/">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 6</option>
    <option class="op" value="https://reqzone.com/movie/game-of-thrones-the-last-watch/">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 7</option>
    <option class="op" value="https://reqzone.com/movie/game-of-thrones-the-last-watch/">ALL Episodes</option>
    </select>
    <select class="menu" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option class="op">SEASON 8</option>
    <option class="op" value="http://reqzone.com">Episode 1</option>
    <option class="op" value="http://reqzone.com">Episode 2</option>
    <option class="op" value="http://reqzone.com">Episode 3</option>
    <option class="op" value="http://reqzone.com">Episode 4</option>
    <option class="op" value="http://reqzone.com">Episode 5</option>
    <option class="op" value="http://reqzone.com">Episode 6</option>
    <option class="op" value="http://reqzone.com">Episode 7</option>
    <option class="op" value="http://reqzone.com">Episode 8</option>

    </select>
  
  </div>

</body>


</body>
</html>
<?php
include 'footer.php';
?>