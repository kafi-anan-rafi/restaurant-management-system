<?php
$sname= "localhost";
$unmae= "kafi-anan";
$password = "kafianan";
$db_name = "lets-eat";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    die("Connection failed! <br>");
}
?>