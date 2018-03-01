<?PHP
include('db.php');

$username=$_POST['username'];
$name=$_POST['name'];
$pwd1=$pwd= $_POST['pwd'];
$email =$_POST['e1'];
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];


$sql1="select * from user ";
$mysqli_result=$mysqli->query($sql1);
	$rows=array();
	while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
		$rows[]=$row;
		}
foreach(  $rows as $row  ){
if ($row['username']==$username){
			echo '对不起   该账号已被注册';
			exit;
			}

}


while (list($user,$pwd)=each($_POST)){
if ($user!='submt')

setcookie("$user","$pwd");


}

setcookie("count","1");



$sql="INSERT  INTO   user values (0,'{$username}','{$name}','{$pwd1}','{$email}',{$year} ,{$month},{$day},'男' ,1 )";
$is=$mysqli->query($sql);

if ($is>0){
header("location:html_test_code/farme.html");
}



?>