<?php 
/*
 *  Index View selector, currently contains example views
 * 
 */

// includes to relevant files
include_once 'app/config/siteConfig.php';

// index, main controller to load the other views

// url parametr t get the page, p for page.
if (isset($_GET['p']))
{
    $page = $_GET['p'];
}

// select the page
switch ($page) 
{
	case "login":
            // include view
            require_once 'app/views/login.php';
	break;    

	default:
            // redirect back to login - a good start.
            header('location:'.APP_URL.'/login/');
    break;
}
             
// end of page selection
?>