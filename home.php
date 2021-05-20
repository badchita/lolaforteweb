<?php
class home {
    function index() {
        include("Header.html");
        include("Home.html");
		include("Footer.html");
	}
}

$a = new home();