
<?php

include("db.php");


$sql=" select * from  admin  ";

$mysqli_result=$mysqli->query($sql);
while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
	$rows[]=$row;
	}

$username=$_POST['username'];


$pwd=$_POST['usernames'];




$sql="select * from admin";
$mysqli_result=$mysqli->query($sql);
while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
	$rows[]=$row;
	}

	foreach($rows as $row){
		if($row['username']==$username&&$row['pwd']==$pwd)
	header  ('location:admin.php');
		else
	$flag=1;
	}
	
	if($flag==1)
	echo "  <br/> <br/><br/> <br/> <a href=login.PHP><h1 align=center>密码错误点击重新登</h1></a>";

?>