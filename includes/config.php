<?php
ob_start(); //Turns on output buffering 
session_start();

date_default_timezone_set("Europe/Prague");

$server = "sql313.epizy.com";
$username = "epiz_27266202";
$password = "vfu8bytZXBab";
$dbname = "epiz_27266202_nettube";

try {
    $con = new PDO($server, $username, $password, $dbname);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>