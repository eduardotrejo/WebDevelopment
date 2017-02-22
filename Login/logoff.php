<?php
session_start();
session_destroy(); // can't destroy without starting it.

header("Location: login.php");

?>
