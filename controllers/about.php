<?php
class about {
    function index() {
        include("pages/Header.php");
        include("pages/About.php");
		include("pages/Footer.php");
	}
}

$a = new about();