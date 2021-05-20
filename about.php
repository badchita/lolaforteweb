<?php
class about {
    function index() {
        include("Header.html");
        include("About.html");
		include("Footer.html");
	}
}

$a = new about();