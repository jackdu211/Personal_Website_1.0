<?PHP
include('db.php');while (list($user,$pwd)=each($_POST)){
if ($user!='submt')


setcookie("$user","$pwd");


}


//$username=$_POST['username'];
$name=$_POST['name'];
$pwd= $_POST['pwd'];
$email =$_POST['e1'];
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];	
$username=$_COOKIE['username'];
   $ww=$name;


$sql="update  user set     name='$name'  ,pwd= $pwd   ,email =$email , year=$year  , month=$month , day=$day    where    username= $username     ";
//$sql1="update  user set    name=$name  pwd= $pwd email =$email year=$year  month=$month day=$day where   username=$_COOKIE['username']";



	


$is=$mysqli->query($sql);



if ($is>0){
echo "修改成功请刷新页面";
}



?>