<?php
include './cryptClass.php';


$string = $_POST['string'];
$crypt = new SHA256();
$result = $crypt->hashing($string);

$link = mysqli_connect('localhost', 'root', '', 'sha256');
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
} else {
	 $link->real_query('INSERT INTO hash256 (hash) VALUES ("'.$result.'")');
}
mysqli_close($link);
header('Access-Control-Allow-Origin: *');
header ("Content-Type: text/html; charset=utf-8");
echo $result;



?>
