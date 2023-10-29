<?php
/*  
    portal-config.php   

    used to store all of our it162 configuration information

 */

 //echo basename ($_SERVER['PHP_SELF']);

 //prevents data from being sent early

ob_start();

//this helps us avoid PHP date errors:

date_default_timezone_set('America/Los_Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default


switch (THIS_PAGE){
          
    case 'index.php':
        $title = "Vanessa Garcia's IT162 Portal Website";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;   
    
    case 'contact.php':
        $title = "Vanessa Garcia's IT162 contact page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Vanessa';
        $logo_color = ' style="color:#0f0"';
    break;    

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
        $PageID = 'Welcome';

}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contact.php'] = "Contact Vanessa";

/* 
      here we're creating a function to generate links and keep the highlight on the current page

       <a href="index.php" class="selected">Welcome</a>
       <a href="elements.php">HTML Elements</a>
       <a href="aia.php">AIA</a>
       <a href="big/index.php">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.php">Flowchart</a>
       <a href="fp/index.html">Final Project</a>
       <a href="contact.php">Contact Vanessa</a>

*/


/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/

function makeLinks($nav1)
{
        $myReturn = '';
         foreach($nav1 as $url => $text){

        if($url == THIS_PAGE){
            $myReturn .= "<a class=\"selected\" href=\"$url\">$text</a>";
        }else{
            $myReturn .= "<a href=\"$url\">$text</a>";

        }


           
         }
        return $myReturn;
}




?>