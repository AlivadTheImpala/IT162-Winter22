<?php

/*

Used to store all of our IT162 configuration information

*/

// echo basename($_SERVER['PHP_SELF']);

define ('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;

// die;

switch (THIS_PAGE) {
    case 'index.php':
        # code...
        $title = 'The Home Page';
        $logo = 'fa-home';
        $PageID = 'Bienvenido/Welcome';
        break;
    
    // case 'big/index.php':
    //     # code...
    //     $title = 'Biiiig';
    //     $logo = 'fa-meteor';
    //     $PageID = 'The Big One';
    //     break;
    
    case 'aia.php':
        # code...
        $title = 'AIA';
        $logo = 'fa-rocket';
        $PageID = 'AIA';
        break;

    // case 'flowchart.php':
    //     # code...
    //     $title = 'Flowchart';
    //     $logo = 'fa-ghost';
    //     $PageID = 'Contact Brandon';
    //     break;

    case 'fp/index.php':
        # code...
        $title = 'Final Project';
        $logo = 'fa-first-order-alt';
        $PageID = 'Final';
        break;

    case 'contactme.php':
        # code...
        $title = 'Contact Me';
        $logo = 'fa-envelope-square';
        $PageID = 'Contact Brandon';
        break;
    default:
        # code...
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
        break;
}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Brandon";


/*
creates function to generate links and highlight the current page 

            <li><a href="index.php" class="selected">Welcome</a></li>
            <li><a href="big/index.php">Big</a></li>
            <li><a href="aia.php">AIA</a></li>
            <li><a href="flowchart.php">Flowchart/Layout</a></li>
            <li><a href="fp/index.php">Final Project</a></li>
            <li><a href="contactme.php">Contact Brandon</a></li>


*/

function makeLinks($nav1){
    
    $myReturn = '';
    foreach($nav1 as $url => $text){

        if($url == THIS_PAGE){
            $myReturn .="<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }
        
        
        else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
        
    }

    return $myReturn;

}


?>