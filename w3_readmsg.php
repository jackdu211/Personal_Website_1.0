<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body bgcolor=ffffff>
<form method=POST action="w3_readmsg.php">
<table border=0 cellpadding=2 width=395>
  <tr>
    <td nowrap><font color=004080>留言昵称</font></td>
    <td width=20%><input type=text name=alias id = alias size=8></td>
    <td nowrap><font color=004080>电子邮箱</font></td>
    <td width=50%><input type=text name=email id = email size=18></td>
  </tr>
  <tr>
    <td nowrapvalign=top><font color=004080>内容</font></td>
    <td width=80% colspan=3><textarea rows=5 name=msg id = msg cols=33></textarea></td>
  </tr>
  <tr>
    <td width=100% colspan=4 align=center>
       <input type=submit value="发送留言">
       <input type=reset value="清除留言">
    </td>
  </tr>
</table>
</form>
</body>
</html>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	//发送留言到服务器
	$host = "localhost";
	$user = "root";
	$psw = "7873215";
	
	$db = "web_date";
	$table = "t_msg";
	
	$alias = $_POST['alias'];
	$msg = $_POST['msg'];
	$email = $_POST['email'];
	//获取发布留言的时间
	date_default_timezone_set("Asia/Hong_Kong");
	$time = date("Y-m-d H:i:s");
	//echo $time;
	
	$insert = "insert into $table(alias,email,msg,time)values('$alias','$email','$msg','$time')";
	//echo $insert;
	
	//将数据存入数据库
	if(($alias!="") and($msg!=""))
	{
		$con = mysql_connect($host, $user, $psw) or die("could not connect the database:" .mysql_error());
		mysql_select_db($db, $con);
		mysql_query("set names 'utf8'");
		$answer = mysql_query($insert, $con);
		mysql_free_result($answer);
		mysql_close($con);	
	}
	else if(($alias!="") or($msg!=""))
	{
		echo "留言代号或留言为空";
	}
	else if(($alias="") and($msg=""))
	{
		echo "留言代号和留言为空";	
	}
	else
	{
		//echo "出现未知错误，请与管理员联系。";	
	}
	
?>
