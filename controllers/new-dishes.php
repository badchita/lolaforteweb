<?php
class newDishes {
    function index() {
        include("pages/Header.php");
        include("pages/NewDishes.php");
		include("pages/Footer.php");
	}
}

$a = new newDishes();