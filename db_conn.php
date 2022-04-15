<!-- <?php
        // $sname= "localhost";
        // $unmae= "kafi-anan";
        // $password = "kafianan";
        // $db_name = "lets-eat";
        // $conn = mysqli_connect($sname, $unmae, $password, $db_name);

        // if (!$conn) {
        //     die("Connection failed! <br>");
        // }
        // 
        ?> -->

<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'kafi-anan');
define('DB_PASS', 'kafianan');
define('DB_NAME', 'lets-eat');

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if ($conn->connect_error) {
    die('Connection failed!' . $conn->connect_error);
}
