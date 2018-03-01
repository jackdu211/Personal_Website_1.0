<?PHP
include("db.php");
$pwd=$_POST['pwd'];
$user=$_POST['username'];



$sql1="select * from user ";
$mysqli_result=$mysqli->query($sql1);
	$rows=array();
	while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
		$rows[]=$row;
		}
foreach(  $rows as $row  ){
if ($row['username']==$user &&$row['pwd']==$pwd){    
	$a=$row['name'];
	$count=$row['count']+1;
	$sql="update  user set   count=$count   where    username= $user     ";
    $mysqli->query($sql);
	setcookie("name","$a");
	setcookie("count","$count");
	header("location:html_test_code/farme.html");
			}

}


echo"账号或密码错误请重新登录";






?>