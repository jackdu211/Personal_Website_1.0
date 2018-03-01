<?PHP
include("db.php");


$id=$_GET['id'];

$sql=  "delete  from mysql1  where id='$id'";

$mysqli->query($sql);

header ('location: admin.php');



?>