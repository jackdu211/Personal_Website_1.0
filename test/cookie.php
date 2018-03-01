<?PHP
while (list($user,$pwd)=each($_POST)){
if ($user!='submt')
 echo $user;

setcookie("$user","$pwd");
echo $_COOKIE["user"];

}

header ('location:test_foreach.php')
?>