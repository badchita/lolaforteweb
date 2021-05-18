<?php
class menu {
    function index() {
        include("pages/Header.php");
        include("pages/Menu.php");
		include("pages/Footer.php");
	}
}

$a = new menu();