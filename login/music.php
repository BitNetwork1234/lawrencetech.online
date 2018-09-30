<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>


<html lang="en" dir="ltr">
  <head>
    <head>
    	  <link rel="stylesheet" href="/css/styles.css"></link>
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <meta charset="utf-8">
    <title>Music Libary</title>
  </head>
  <body>
    <div class="header">
      <a href="#default" class="logo">Other Shit</a>
      <div class="header-right">
        <a class="active" href="logout.php">Logout</a>
      </div>
    </div>
  <center><h1>Music Libary</h1></center>
  <center><p>I dont own any of the rights to the music on this website.</p></center>
  <table id="customers">
  <tr>
    <th>Song</th>
    <th>Author</th>
    <th>ID</th>
  </tr>
  <tr>
    <td><a href="\indexs\swim.htm">Swim</a></td>
    <td>Dan Croll</td>
    <td>00001</td>
  </tr>
</table>



  </body>
</html>
