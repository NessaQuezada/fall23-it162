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

switch (THIS_PAGE){
          
    case 'iindex.php':
        $title = "Shackles coffee review";
        $PageID = 'Welcome';
    break;   
    
    case 'contact.php':
        $title = "Shackles contact page";
        $PageID = 'Contact Shackles';
   
    break;    

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
        $PageID = 'Welcome';

}

$nav1['index.php'] = "Welcome";
$nav1['about.php'] = "about";
$nav1['schedule.php'] = "schedule";
$nav1['videos.php'] = "videos";
$nav1['contact.php'] = "Contact Shackles";



/*
here we're creating a function to generate links and keep the highlight on the current page

       <a href="template.html" class="active">Home</a>
        <a href="about.html">About Me</a> 
        <a href="schedule.html">Stream Schedule</a> 
        <a href="videos.html">Videos</a>
        <a href="contact.php">Contact Shackles</a>
       </nav>
       </header>

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