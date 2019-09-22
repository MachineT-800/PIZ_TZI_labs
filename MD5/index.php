<?php
include './cryptClass.php';


$string = $_POST['string'];
$result = MD($string);

$link = mysqli_connect('localhost', 'root', '', 'md5');
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
} else {
	 $link->real_query('INSERT INTO md5hash (hash) VALUES ("'.$result.'")');
}
mysqli_close($link);
header('Access-Control-Allow-Origin: *');
header ("Content-Type: text/html; charset=utf-8");
echo $result;



?>
