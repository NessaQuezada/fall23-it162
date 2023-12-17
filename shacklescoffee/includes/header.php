<?php include 'fp-config.php';?>
<!DOCTYPE html>
<html lang="en">
   <head>
     <title><?=$title?></title>
     <meta name="robots" content="noindex,nofollow" >
     <meta name="viewport" content="width=device-width" />
     <meta charset="utf-8" />
     <link rel="stylesheet" href="css/main.css" />
     <link rel="stylesheet" href="css/nav.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   </head>
   <body>
       <header>
       <a href="index.html"> <img src="images/shackleslogo2.png" alt="logo"> </a>
        
       <nav class="topnav" id="myTopnav">
       <?=makeLinks($nav1)?>
       <!--
        <a href="index.html" class="active">Home</a>
        <a href="about.html">About Me</a> 
        <a href="schedule.html">Stream Schedule</a> 
        <a href="videos.html">Videos</a>
        <a href="contact.php">Contact Shackles</a>
-->
      
      </nav>
      </header>