<?php
$host = "localhost";
$username = "xqpxzunj_ffs";
$password = "C&Z%P4*C2F}1";
$dbname = "xqpxzunj_bl";
$useragent = "Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36";

$connection = mysqli_connect($host, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!mysqli_set_charset($connection, "utf8")) {
    die("Error loading character set utf8: " . mysqli_error($connection));
}
?>
