<?php
class branches {
    function index() {
        include("Header.html");
        include("Branches.html");
		include("Footer.html");
	}
}

$a = new branches();