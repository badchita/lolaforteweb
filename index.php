<?php
switch(@$_GET['p']) {
	case "menu":
		include("menu.php");
		$a->index();	
		break;
    case "new-dishes":
		include("new-dishes.php");
		$a->index();	
		break;
    case "about":
		include("about.php");
		$a->index();	
		break;
    case "branches":
		include("branches.php");
		$a->index();	
		break;
	case "home":
		include("home.php");
		$a->index();	
		break;
	default:
		include("login.php");
		$a->index();
		break;
}