<?php 


session_start();
session_destroy();

echo "session destroy";
header("REfresh:3; url=home.php");





?>