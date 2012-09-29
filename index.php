<?php 
/*
 *  Index View selector, currently contains example views
 * 
 */

// index, main controller to load the other views

// url parametr t get the page
if (isset($_GET['p']))
{
    $page = $_GET['p'];
}

// select the page
switch ($page) 
{
	case "login":
            // include view
            require_once 'views/login.php';
	break;    

	default:
            // include view
            require_once 'views/login.php';
    break;
}
             
// end of page selection
?>