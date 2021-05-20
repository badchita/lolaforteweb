<?php
class menu {
    function index() {
        include("Header.html");
        include("Menu.html");
		include("Footer.html");
	}
}

$a = new menu();