<!DOCTYPE html>
<html>
    <head>
        <title> Hangman Game </title>
      <link href="CSS/default.css" rel="stylesheet" type="text/css">
      <script>$(document).ready(function(){
   alert("Alert");
});</script>
      <script src="JS/jquery-1.11.0.min.js"></script>
      
    </head>
    <body onload="displayUnderscores()">
        <h1>Hang Man Game</h1>
        <hr>
        <div id="word_bar"  >
        Select the letters below to complete the word and win the game
        <img src="IMG/hangman0.gif" id="main_img">
        
        </div>
        <div id='dotted_line'></div>    
        
        <div id="keyboard_div">
            <?php include("PHP/keyboard.php"); ?>
        </div>
        <p>No text loaded yet</p>
    </body>
</html>