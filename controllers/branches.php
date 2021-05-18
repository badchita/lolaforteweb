<?php
class branches {
    function index() {
        include("pages/Header.php");
        include("pages/Branches.php");
		include("pages/Footer.php");
	}
}

$a = new branches();