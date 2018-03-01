<?php

include('db.php');



$msg=posts('msg');
$users=posts('users');

if($msg==''	)
{
echo "留言内容不能为空";
exit;
}

if($users=="")
{
echo "用户名不能为空";
exit;
}


   
    $time=date('Y-m-d H:i:s', time()); 

    var_dump($time);

$input="INSERT  INTO  mysql1 VALUES(0,'{$users}','{$msg}','{$time}')" ;
$is=$mysqli->query("$input");



if ($is>0){
echo '留言成功';
}
else{
echo  '留言失败';
exit;
}



?>

