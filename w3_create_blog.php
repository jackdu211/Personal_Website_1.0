<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	error_reporting(E_ALL ^ E_DEPRECATED);

	$host = "localhost";
	$db_user = "root";
	$db_psw = "7873215";
	$db = "web_date";
	$table = "t_blog";


@	$user = $_POST['user'];
@	$psw = $_POST['psw'];
@	$blog_title = $_POST['blog_title'];
@	$main_body = $_POST['main_body'];
	
	
	//获取当前时间
	date_default_timezone_set("Asia/Hong_Kong");
	$time = date('Y-m-d H:i:s');
	
	
	
	//对博客进行格式包装
	$left = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>博客</title>
<style type="text/css">
body,td,th {
	font-family: "楷体";
	font-size: 16px;
}
body {
	margin-left: 1cm;
	margin-top: 1cm;
	margin-right: 1cm;
}
</style>
</head>

<body>
<div align="center">
<p><h3>Carl的博客<h3></p>
<p>----------------------------------------------------------------------------------------------------------</p>'
."<p>发表时间：".$time."</p>";


$right = '<p>---------------------------------------------------------------------------------------------------------</p>
<p>The End</p></div>
</body>
</html>';
	
	
	
	
	
	
	//最终文档
	$new_main_body = $left .$main_body .$right;
	
	$my_select = "select ip from $table";
	
	//确认是管理员
	if(($user=="这是账号") and($psw =="这是密码"))
	{
		$con = mysql_connect($host, $db_user, $db_psw) or die("连接数据库出错：".mysql_error());
		mysql_select_db($db, $con);
		mysql_query("set names 'utf8'");
		//检测现存博客数目
		$result = mysql_query($my_select, $con);
		$num = 0;
		while($row = mysql_fetch_row($result))
		{
			$num +=1;	
		}
		mysql_free_result($result);
		//创建新博客文件名
		$blog = "blog" .$num .".html";
		//创建存储地址<br />
		$blog_address = "blog_address/".$blog;
		$my_insert = "insert into $table(blog_name,blog_url)values('$blog_title','$blog')";
		//将新博客文件资料存入数据库
		$answer = mysql_query($my_insert,$con);
		mysql_free_result($answer);
		mysql_close($con);
		//创建新博客文件
		if(($html_blog = fopen($blog_address,"w")) ===FALSE)
		{
			echo '写入博客失败';
			exit;	
		}
		else
		{
			if(!fwrite($html_blog, $new_main_body))
			{
				echo "写入文件出错";	
				exit;
			}
			else
			{
				echo "创建博客成功";
				fclose($html_blog);	
			}	
		}
		
		
	}
	//检测到非管理员
	else
	{
		echo "抱歉，您没有权限进行此操作。";
	}

	

?>
</body>
</html>