<?php include 'portal-config.php';?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
  <script src="https://kit.fontawesome.com/af250103a4.js" crossorigin="anonymous"></script>
 </head>
 <body>
     <header>
     <h1><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Vanessa's IT162 Website</h1>
     <nav class="topnav" id="myTopnav">
     <?=makeLinks($nav1)?>
    
     <!--
       <a href="index.php" class="selected">Welcome</a>
       <a href="elements.php">HTML Elements</a>
       <a href="aia.php">AIA</a>
       <a href="big/index.php">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.php">Flowchart</a>
       <a href="fp/index.html">Final Project</a>
       <a href="contact.php">Contact Vanessa</a>
-->
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      
     </nav>
     </header>
     
   <div class="wrapper">
     <!-- header ends here -->