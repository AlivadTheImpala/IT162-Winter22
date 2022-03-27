<?php

/*

Used to store all the data for GDO

*/

// echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;

// die;

switch (THIS_PAGE) {
    case 'index.php':
        # code...
        $title = 'Green Dog Oasis';
        break;

        // case 'services.php':
        //     # code...
        //     $title = 'Our Services';
        //     
        //     break;

        // case 'about-us.php':
        //     # code...
        //     $title = 'About Us';
        //     break;

        // case 'get-involved.php':
        //     # code...
        //     $title = 'Get Involved';
        //     
        //     break;

        // case 'donate.php':
        //     # code...
        //     $title = 'Donate!';
        //     
        //     break;

        // case 'contactme.php':
        //     # code...
        //     $title = 'Contact Green Dog Oasis';
        //     $logo = 'fa-envelope-square';
        //     $PageID = 'Contact Us';
        //     break;
    default:
        # code...
        $title = THIS_PAGE;

        break;
}


$nav1['about-us.php'] = "About Us";
$nav1['services.php'] = "Services";
$nav1['get-involved.php'] = "Get Involved";
$nav1['donate.php'] = "Donate";



/*
creates function to generate links and highlight the current page 

            <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Get Involved</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Donate</a>
                </li>


*/

function makeLinks($nav1)
{

    $myReturn = '';
    foreach ($nav1 as $url => $text) {

        if ($url == THIS_PAGE) {
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        } else {
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }

    return $myReturn;
}
