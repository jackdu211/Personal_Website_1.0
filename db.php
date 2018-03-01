<?php 
date_default_timezone_set("PRC");

function posts($a){
$key= $_POST[$a];
return   $key;
}


$mysqli = new mysqli('localhost', 'root', '', 'test');
if ($mysqli->connect_errno>0){
echo '连接错误';
echo  $mysqli->connect_error;
exit;
	}	

$mysqli->query("SET NAMES UTF8");


?>