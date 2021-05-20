<?php
class newDishes {
    function index() {
        include("Header.html");
        include("NewDishes.html");
		include("Footer.html");
	}
}

$a = new newDishes();