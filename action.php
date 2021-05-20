<?php
    if (isset($_POST['gotoHomePage'])) {
        header('location: index.php?p=home');
        exit();
    }
?>