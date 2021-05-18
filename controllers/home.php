<?php
class home {
    function index() {
        include("pages/Header.php");
        include("pages/Home.php");
		include("pages/Footer.php");
	}
}

$a = new home();