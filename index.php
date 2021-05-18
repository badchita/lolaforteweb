<?php
switch(@$_GET['p']) {
	case "menu":
		include("controllers/menu.php");
		$a->index();	
		break;
    case "new-dishes":
		include("controllers/new-dishes.php");
		$a->index();	
		break;
    case "about":
		include("controllers/about.php");
		$a->index();	
		break;
    case "branches":
		include("controllers/branches.php");
		$a->index();	
		break;
	default:
		include("controllers/home.php");
		$a->index();
		break;
}