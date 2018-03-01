<?PHP
include ("db.php");
$sql1="select * from count ";
$mysqli_result=$mysqli->query($sql1);
	
$row=$mysqli_result->fetch_array();
 $rows=$row['count']+1;
$sql="update  count    set  count=$rows   where  id=1";
$is=$mysqli->query($sql);


echo '<br/>'.'      当前访问人数'.$rows.'人';
	



?>